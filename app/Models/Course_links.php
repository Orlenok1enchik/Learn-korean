<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course_links extends Model
{
    use HasFactory;

    public function course() {
        return $this->hasOne(Course::class, 'course_link_id', 'course_id');
    }
}
