<?php

namespace App\Models;

use App\Models\Course;
use App\Models\Recording;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Group extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function course() {
        return $this->hasOne(Course::class, 'id', 'course_id');
    }

    public function recording() {
        return $this->hasOne(Recording::class, 'id', 'group_id');
    }
}
