<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jobs extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function category()
    {
        return $this->belongsTo(JobsCategory::class, 'category_id', 'id');
    }

    public function industry()
    {
        return $this->belongsTo(JobsIndustry::class, 'industry_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function karyawan()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function views()
    {
        return $this->hasMany(JobViews::class, 'job_id', 'id');
    }

    public function apply()
    {
        return $this->hasMany(JobViews::class, 'job_id', 'id');
    }

    public function job_types()
    {
        return $this->belongsTo(JobsType::class, 'job_type', 'id');
    }

    public function experiences()
    {
        return $this->belongsTo(JobsExperience::class, 'experience', 'id');
    }

    public function careers()
    {
        return $this->belongsTo(JobsCareerLevel::class, 'career_level', 'id');
    }

    public function qualifications()
    {
        return $this->belongsTo(JobsQualification::class, 'kualifikasi', 'id');
    }
}
