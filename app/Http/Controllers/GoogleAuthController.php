<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class GoogleAuthController extends Controller
{
    public function redirect()
    {
        return Socialite::driver('google')->redirect();
    }

    public function callbackGoogle()
    {
        try {
            $google_user = Socialite::driver('google')->user();
            $user = User::where('google_id', $google_user->getId())->orWhere('email', $google_user->getEmail())->first();
            if (!$user) {
                $new_user = User::create([
                    'name' => $google_user->getName(),
                    'email' => $google_user->getEmail(),
                    'google_id' => $google_user->getId(),
                    'email_verified_at' => Carbon::now()->toDateTimeString()
                ]);
                Auth::login($new_user);
                return redirect('/pre-home');
            } else {
                if ($user->google_id === $google_user->getId() || $user->email === $google_user->getEmail()) {
                    Auth::login($user);
                    return redirect('/login');
                } else {
                    return redirect('/login')->with('error', 'An account with this email already exists but with a different Google account. Please login with the correct Google account or contact support.');
                }
            }
        } catch (\Throwable $e) {
            return redirect()->back()->with('error', 'Terjadi Kesalahan Sistem');
        }
    }
}
