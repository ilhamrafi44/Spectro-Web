<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class LoginControllerAjax extends Controller
{
    public function sendEmailVerification(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email'
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()->first()]);
        }

        $user = User::where('email', $request->email)->first();

        if (!$user) {
            return response()->json(['error' => 'User not found']);
        }

        $user->sendEmailVerificationNotification();

        return response()->json(['success' => 'Verification link has been sent to the email provided.']);
    }

    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['message' => $validator->errors()->first()], 422);
        }

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            if ($user->email_verified_at == null) {
                Auth::logout();
                return response()->json(['error' => 'Akun belum diverifikasi. Silakan periksa email Anda untuk tautan verifikasi.']);
            } else {
                return response()->json(['success' => 'Login berhasil']);
            }
        } else {
            return response()->json(['error' => 'Email atau password salah.']);
        }
    }
}
