<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = [
        'name',
    ];

    public function course()
    {
        return $this->hasMany(Course::class, 'course_id');
    }
}
