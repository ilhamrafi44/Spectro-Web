<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\EmployerProfile;
use App\Models\CandidateProfile;
use App\Models\UserResume;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterControllerAjax extends Controller
{
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => [
                'required',
                'string',
                'min:8',
                'regex:/[a-z]/',      // must contain at least one lowercase letter
                'regex:/[A-Z]/',      // must contain at least one uppercase letter
                'regex:/[0-9]/',      // must contain at least one digit
                'confirmed'
            ],
            'no_tlp' => ['required', 'int'],
            'type' => ['required'],
            'jenis_kelamin' => ['in:1,2'],
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()->first()]);
        }

        $role = $request->type;
        if($role == "employer") {
            $role = 2;
        } else if($role == "candidate") {
            $role = 1;
        } else {
            return response()->json(['error' => 'Registrasi gagal, aksi dilarang.']);
        }

            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'no_tlp' => $request->no_tlp,
                'role' => $role,
                'password' => Hash::make($request->password),
            ]);

        if ($role == 1) {
            CandidateProfile::create([
                'user_id' => $user->id,
                'jenis_kelamin' => $request->jenis_kelamin
            ]);
            UserResume::create([
                'user_id' => $user->id,
            ]);
        } else {
            EmployerProfile::create([
                'user_id' => $user->id,
            ]);
        }

        if ($user) {
            return response()->json(['success' => 'Registrasi berhasil, Silahkan cek email anda untuk memverfikasi akun terlebih dahulu.']);
        } else {
            return response()->json(['error' => 'Registrasi gagal, silakan coba lagi nanti.']);
        }
    }
}
