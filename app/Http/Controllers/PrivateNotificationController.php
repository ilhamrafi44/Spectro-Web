<?php

namespace App\Http\Controllers;

use App\Models\PrivateNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PrivateNotificationController extends Controller
{
    public function index_user()
    {
        $data = PrivateNotification::where('to_id', Auth::user()->id)->first();
        return view('private.notification', [
            'page_name' => 'My Private Notification',
            'data' => $data,
        ]);
    }

    public function destroy(string $id)
    {
        if (Auth::user()->role == 3) {
            $data = PrivateNotification::findOrFail($id);
            $data->delete();
        } else {
            $data = PrivateNotification::where('to_id', Auth::user()->id)->where('id', $id)->first();
            $data->delete();
        }

        return redirect()->back()->with('message', 'Notifikasi Berhasil Dihapus');
    }
}
