<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function users()
    {
        return $this->belongsTo(User::class);
    }

    public function advertisements()
    {
        return $this->hasMany(Advertisement::class);
    }
}
