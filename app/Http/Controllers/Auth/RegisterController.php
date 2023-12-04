<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Support\Str;
use App\Models\EmployerProfile;
use App\Models\CandidateProfile;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected function redirectTo()
    {
        return '/email/verify';
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */

    protected function validator(array $data)
    {
        return Validator::make($data, [
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
            'no_tlp' => ['required'],
            'role' => ['required'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */

    protected function create(array $data)
    {
        // Modifikasi nomor telepon jika dimulai dengan '0' menjadi '62'
        $nomorTelepon = $data['no_tlp'];
        if (Str::startsWith($nomorTelepon, '0')) {
            $nomorTelepon = '62' . substr($nomorTelepon, 1);
        }

        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'nomor_telepon' => $nomorTelepon, // Menggunakan nomor telepon yang telah dimodifikasi
            'role' => $data['role'],
            'password' => Hash::make($data['password']),
        ]);

        if ($data['role'] == 1) {
            CandidateProfile::create([
                'user_id' => $user->id,
            ]);
        } else {
            EmployerProfile::create([
                'user_id' => $user->id,
            ]);
        }

        return $user;
    }
}
