<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CandidateProfile extends Model
{
    use HasFactory;


    protected $guarded = [];

    public function pengalaman_kerja()
    {
        return $this->hasMany(PengalamanKerja::class, 'user_id', 'user_id');
    }

    public function comments()
    {
        return $this->hasMany(Rating::class, 'user_id', 'user_id');
    }

    public function social_media()
    {
        return $this->hasMany(SocialMedia::class, 'user_id', 'user_id');
    }

}
