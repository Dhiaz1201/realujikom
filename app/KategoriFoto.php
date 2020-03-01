<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KategoriFoto extends Model
{
    public function galery(){
        return $this->hasMany('App\Galery','kategori_foto_id');
    }

      public function getRouteKeyName()
    {
        return 'slug';
    }
}
