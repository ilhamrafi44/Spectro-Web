<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserResume;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\EmployerProfile;
use App\Models\CandidateProfile;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterControllerAjax extends Controller
{
    public function register(Request $request)
    {
        try {
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
                'no_tlp' => ['required', 'string'], // Mengubah menjadi 'string' agar dapat menerima nomor telepon sebagai string
                'type' => ['required'],
                'jenis_kelamin' => ['in:1,2'],
            ], [
                'email.required' => 'Email wajib diisi.',
                'email.email' => 'Format email tidak valid.',
                'email.max' => 'Email tidak boleh lebih dari :max karakter.',
                'email.unique' => 'Email sudah digunakan.',

                'password.required' => 'Password wajib diisi.',
                'password.min' => 'Password minimal :min karakter.',
                'password.regex' => 'Password harus mengandung setidaknya satu huruf kecil, satu huruf besar, dan satu angka.',
                'password.confirmed' => 'Konfirmasi password tidak sesuai.',

                'no_tlp.required' => 'Nomor telepon wajib diisi.',
                'no_tlp.string' => 'Format nomor telepon tidak valid.',

                'type.required' => 'Tipe wajib diisi.',

                'jenis_kelamin.in' => 'Jenis kelamin harus dipilih dari opsi yang tersedia.'
            ]);

            if ($validator->fails()) {
                return response()->json(['error' => $validator->errors()->first()]);
            }

            $noTlp = $request->no_tlp;
            if (Str::startsWith($noTlp, '0')) {
                $noTlp = '62' . substr($noTlp, 1);
            }

            $role = $request->type;
            if ($role == "employer") {
                $role = 2;
            } else if ($role == "candidate") {
                $role = 1;
            } else {
                return response()->json(['error' => 'Registrasi gagal, aksi dilarang.']);
            }

            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'nomor_telepon' => $noTlp,
                'role' => $role,
                'password' => Hash::make($request->password),
            ]);

            $buat_email = $user->sendEmailVerificationNotification();

            if ($buat_email) {
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
            } else {
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
            }
            if ($user) {
                return response()->json(['success' => 'Registrasi berhasil, Silahkan cek email anda untuk memverfikasi akun terlebih dahulu.']);
            }
        } catch (\Exception $e) {
            // An exception occurred, so the transaction will be rolled back
            return response()->json(['error' => 'Registrasi gagal, silakan coba lagi nanti.']);
        }
    }
}
