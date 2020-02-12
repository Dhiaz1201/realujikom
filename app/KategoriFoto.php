<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Session;
class KategoriFoto extends Model
{
    public function galery(){
        return $this->hasMany('App\Galery','galerie_id');
    }
}