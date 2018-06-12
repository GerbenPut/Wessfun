<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
//    protected $fillable = ['titel', 'message'];
//    protected $guarded = [];

    public function images()
    {
        return $this->belongsTo(Image::class);
    }
}
