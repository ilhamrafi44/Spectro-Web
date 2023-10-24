<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SavedJobs extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function employer()
    {
        return $this->belongsTo(User::class, 'employer_id', 'id');
    }

    public function jobs()
    {
        return $this->hasOne(Jobs::class, 'id', 'job_id');
    }

}
