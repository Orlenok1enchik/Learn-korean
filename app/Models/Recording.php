<?php

namespace App\Models;

use App\Models\Group;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Recording extends Model
{
    use HasFactory;

    protected $table = 'recordings';

    protected $fillable = [
        'course_id',
        'user_id',
    ];

    public function user() {
        return $this->hasOne(User::class, 'id', 'user_id');
    }

    public function course() {
        return $this->hasOne(Course::class, 'id', 'course_id');
    }

    public function group() {
        return $this->hasOne(Group::class, 'id', 'group_id');
    }
}
