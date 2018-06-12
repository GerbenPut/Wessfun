<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    public function categories()
    {
//        return $this->hasMany(Category::class);
        return $this->belongsTo(Category::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
