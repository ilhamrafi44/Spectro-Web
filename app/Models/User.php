<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
        'nomor_telepon',
        'google_id',
        'email_verified_at'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function employer_profile()
    {
        return $this->belongsTo(EmployerProfile::class, 'id', 'user_id');
    }

    public function employer_job()
    {
        return $this->hasMany(Jobs::class, 'user_id', 'id');
    }

    public function candidate_profile()
    {
        return $this->belongsTo(CandidateProfile::class, 'id', 'user_id');
    }

    public function candidate_resume()
    {
        return $this->belongsTo(UserResume::class, 'id', 'user_id');
    }

    public function pengalaman_kerja()
    {
        return $this->belongsTo(PengalamanKerja::class, 'id', 'user_id');
    }

}
