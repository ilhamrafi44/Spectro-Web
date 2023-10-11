<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployerProfile extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function social_media()
    {
        return $this->hasMany(SocialMedia::class, 'user_id', 'user_id');
    }

    public function karyawan()
    {
        return $this->hasMany(Karyawan::class, 'user_id', 'user_id');
    }

}
