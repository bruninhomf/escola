<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'name', 'course_id', 'class', 'status', 'image', 'zip_code', 
        'street', 'number', 'district', 'city', 'state',
    ];
}
