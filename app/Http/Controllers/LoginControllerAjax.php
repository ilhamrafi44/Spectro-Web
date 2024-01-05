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
        ], [
            'email.required' => 'Kolom email harus diisi.',
            'email.email' => 'Format email tidak valid.'
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()->first()]);
        }

        $user = User::where('email', $request->email)->first();

        if (!$user) {
            return response()->json(['error' => 'User not found']);
        }

        if (!$user->hasVerifiedEmail()) {
            $user->sendEmailVerificationNotification();
            return response()->json(['success' => 'Verification link has been sent to the email provided.']);

        } else {
            return response()->json(['error' => 'Akun anda sudah terverifikasi.']);

        }

    }

    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required',
        ], [
            'email.required' => 'Kolom email harus diisi.',
            'email.email' => 'Format email tidak valid.',
            'password.required' => 'Kolom password harus diisi.',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()->first()]);
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
