<?php

namespace App\Models;

use App\Models\User;
use App\Models\Group;
use App\Models\Course_links;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Course extends Model
{
    use HasFactory;

    protected $table = 'courses';

    public function user(){
        return $this->hasOne(User::class, 'course_id', 'id');
    }

    public function group(){
        return $this->hasOne(Group::class, 'course_id', 'group_id');
    }
    
    public function courseLink(){
        return $this->hasOne(Course_links::class, 'course_id', 'id');
    }
}
