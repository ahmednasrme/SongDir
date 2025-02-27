<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    use HasFactory;
    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }
    public function songs()
    {
        return $this->hasMany(Song::class);
    }
}
