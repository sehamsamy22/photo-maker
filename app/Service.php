<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
Use App\Attr;
class Service extends Model
{
    public function attrs()
    {
        return  $this->hasOne(Attr::class);
    }
}
