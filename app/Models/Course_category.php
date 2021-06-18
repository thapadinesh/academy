<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course_category extends Model
{
    use HasFactory;

    protected $table = 'course_category';

    protected $fillable = [
        'name',
        'slug',
        'about',
        'status',
    ];
}
