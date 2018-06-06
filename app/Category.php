<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
//    protected $fillable = ['id', 'category', 'description'];
//    protected $guarded = [];

    public function images()
    {
//        return $this->belongsTo(Image::class, 'id', 'image_id');
//        return $this->belongsTo(Image::class);
    }
}
