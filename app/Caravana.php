<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Caravana extends Model
{
    public function images()
    {
        return $this->hasMany('App\Image', 'caravan_id');
    }

    protected $table = 'caravanas';

}
