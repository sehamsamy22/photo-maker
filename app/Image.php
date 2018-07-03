<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = ['url', 'category_id'];


 
    public function category()
    {
        return  $this->belongsTo(Category::class);
    }
}
