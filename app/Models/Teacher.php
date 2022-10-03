<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'surname',
        'lastname',
        'email',
        'education',
        'password',
        'experience',
        'text_more',
        'photo'
    ];
}
