<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected static function booting()
    {
        static::saving(function (Post $post) {
            $post->snippet = implode(' ', array_slice(explode(' ', $post->content), 0, 20)) . '...';
        });
    }
}
