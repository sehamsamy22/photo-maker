<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['id', 'name','image_header'];

    public function images()
    {
        return  $this->hasMany(Image::class,'category_id');
    }
}
