<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $fillable=[
        'id_user',
        'text',
        'is_public'
    ];

    protected $casts = [
        'created_at' => 'datetime:d.m.Y',
        'updated_at' => 'datetime:d.m.Y',
        ];
        
    public function user(){
        return $this->hasOne(User::class, 'id', 'id_user');
    }
}
