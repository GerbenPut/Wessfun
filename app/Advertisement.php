<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Advertisement extends Model
{
    public function images()
    {
        return $this->belongsTo(Image::class);
    }
}
