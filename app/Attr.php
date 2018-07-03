<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Service;
class attr extends Model
{
    public function services()
    {
        return  $this->hasOne(Service::class);
    }
}
