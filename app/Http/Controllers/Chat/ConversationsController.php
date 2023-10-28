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
    public function index()
    {
        $conversation = Conversations::with('user1', 'user2')->where('user1_id', auth()->user()->id)
        ->orWhere('user2_id', auth()->user()->id)
        ->get();
        $page_name = 'List Private Chat';
        return view('conversations.index', compact('conversation', 'page_name'));
    }

    public function delete($id)
    {
        $conversation = Conversations::where('user1_id', auth()->user()->id)
        ->orWhere('user2_id', auth()->user()->id)->where('id', $id)
        ->first();
        $conversation->delete();
        if($conversation){
            return redirect()->back()->with('message', 'Percakapan berhasil dihapus.');
        } else {
            return redirect()->back()->with('error', 'Percakapan tidak ditemukan.');
        }
    }

    public function create($target)
    {
        $checks = User::findOrFail($target);
        if(!$checks)
        {
            return redirect()->back()->with('message', 'Anda tidak diperbolehkan');
        }
        $user1_id = Auth::user()->id;
        $user2_id = $target;

        if(Auth::user()->role == 1){
            $check = Applications::where('candidate_id', $user1_id);
            if(!$check){
                return redirect()->back()->with('message', 'Anda belum pernah melamar kerja disini');
            }
        }

        $check_already = Conversations::where('user1_id', auth()->user()->id)
        ->where('user2_id', $target)
        ->first();

        if($check_already)
        {
            return redirect()->route('conversations.index')->with('message', 'Anda sudah memiliki percakapan');
        }

        if(Auth::user()->role == $checks->role){
            return redirect()->back()->with('message', 'Tidak dapat memulai percakapan dengan sesama kandidat/employer');
        }

        $conversation = Conversations::firstOrCreate([
            'user1_id' => $user1_id,
            'user2_id' => $user2_id
        ]);

        if($conversation){
            return redirect()->route('conversations.index');
        }
    }
}
