<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Following extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function Followers()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function Following()
    {
        return $this->belongsTo(User::class, 'employer_id', 'id');
    }

}
