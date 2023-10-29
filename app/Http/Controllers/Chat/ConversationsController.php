<?php

namespace App\Http\Controllers\Chat;

use App\Conversation;
use Illuminate\Http\Request;
use App\Models\Conversations;
use App\Http\Controllers\Controller;
use App\Models\Applications;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ConversationsController extends Controller
{
    public function index(Request $request)
    {
        $order = 'desc';
        if ($request->filled('direction')) {
            $order = $request->input('direction');
        }
        $perPage = 10; // Jumlah item per halaman, dapat disesuaikan sesuai kebutuhan Anda
        if ($request->filled('per_page')) {
            $perPage = $request->input('per_page');
        }
        // Simpan data pencarian dalam sesi
        $request->flash();

        $results = Conversations::with('user1', 'user2')
            ->where(function ($query) {
                $query->where('user1_id', auth()->user()->id)
                    ->orWhere('user2_id', auth()->user()->id);
            })
            ->where(function ($query) use ($request) {
                if ($request->filled('name')) {
                    $query->whereHas('user1', function ($q) use ($request) {
                        $q->where('name', 'like', '%' . $request->input('name') . '%');
                    })->orWhereHas('user2', function ($q) use ($request) {
                        $q->where('name', 'like', '%' . $request->input('name') . '%');
                    });
                }
            })
            ->orderBy('created_at', $request->input('orderby', $order))
            ->paginate($perPage)
            ->appends($request->all());

        $conversation = $results;
        $page_name = 'List Private Chat';
        return view('conversations.index', compact('conversation', 'page_name'));
    }

    public function admin(Request $request)
    {
        $order = 'desc';
        if ($request->filled('direction')) {
            $order = $request->input('direction');
        }
        $perPage = 10; // Jumlah item per halaman, dapat disesuaikan sesuai kebutuhan Anda
        if ($request->filled('per_page')) {
            $perPage = $request->input('per_page');
        }
        // Simpan data pencarian dalam sesi
        $request->flash();

        $results = Conversations::where(function ($query) use ($request) {
            if ($request->filled('name')) {
                $query->whereHas('user1', function ($q) use ($request) {
                    $q->where('name', 'like', '%' . $request->input('name') . '%');
                })->orWhereHas('user2', function ($q) use ($request) {
                    $q->where('name', 'like', '%' . $request->input('name') . '%');
                });
            }
        })
            ->orderBy('created_at', $request->input('orderby', $order))
            ->paginate($perPage)
            ->appends($request->all());


        $conversation = $results;
        $page_name = 'List Private Chat';
        return view('conversations.admin', compact('conversation', 'page_name'));
    }

    public function delete($id)
    {
        $conversation = Conversations::where('user1_id', auth()->user()->id)
            ->orWhere('user2_id', auth()->user()->id)->where('id', $id)
            ->first();
        $conversation->delete();
        if ($conversation) {
            return redirect()->back()->with('message', 'Percakapan berhasil dihapus.');
        } else {
            return redirect()->back()->with('error', 'Percakapan tidak ditemukan.');
        }
    }

    public function create($target)
    {
        $checks = User::findOrFail($target);
        if (!$checks) {
            return redirect()->back()->with('error', 'Anda tidak diperbolehkan');
        }
        $user1_id = Auth::user()->id;
        $user2_id = $target;

        if (Auth::user()->role == 1) {
            $check = Applications::where('candidate_id', $user1_id);
            if (!$check) {
                return redirect()->back()->with('error', 'Anda belum pernah melamar kerja disini');
            }
        }

        $check_already = Conversations::where('user1_id', auth()->user()->id)
            ->where('user2_id', $target)
            ->first();

        if ($check_already) {
            return redirect()->route('conversations.index')->with('message', 'Anda sudah memiliki percakapan');
        }

        if (Auth::user()->role == $checks->role) {
            return redirect()->back()->with('error', 'Tidak dapat memulai percakapan dengan sesama kandidat/employer');
        }

        $conversation = Conversations::firstOrCreate([
            'user1_id' => $user1_id,
            'user2_id' => $user2_id
        ]);

        if ($conversation) {
            return redirect()->route('conversations.index');
        }
    }
}
