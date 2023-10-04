<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use App\Helper\ImageManager;
use Illuminate\Support\Facades\Hash;

class UserControler extends Controller
{
    use ImageManager;
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index()
    {
        $page_name = 'List User';
        return view('admin.users.index', compact('page_name'));
    }

    public function add()
    {
        $page_name = 'Create User';
        return view('admin.users.add', compact('page_name'));
    }

    public function store(Request $request)
    {
        $fileData = NULL;
        $path = storage_path('images/');
        $make_path = 'images/';
        !is_dir($path) && mkdir($make_path, 0777, true);
        if ($request->file('image')) {
            $file = $request->file('image');
            $fileDataUpload = $this->uploads($file, $make_path);
            $fileData = $fileDataUpload['filePath'];
        }
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->role = $request->role;
        $user->nomor_telepon = $request->nomor_telepon;
        $user->email_verified_at = date('Y-m-d h:i:s');
        $user->password = Hash::make($request->password);
        $user->file_profile_id = $fileData;
        $saved = $user->save();

        if ($saved) {
            return redirect()->route('admin.list.user')->with('message', 'User Berhasil Ditambah');
        }
        return redirect()->route('admin.list.user')->with('error', 'User Berhasil Ditambah');
    }
}