<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FileSsw extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function candidate()
    {
        return $this->belongsTo(User::class, 'candidate_id', 'id');
    }

    public function employer()
    {
        return $this->belongsTo(User::class, 'employer_id', 'id');
    }

    public function jobs()
    {
        return $this->hasOne(Jobs::class, 'id', 'job_id');
    }

    public function resume()
    {
        return  $this->hasOne(UserResume::class, 'user_id', 'candidate_id');
    }

}
