<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kategori extends Model
{
     public function makanan()
    {
        return $this->hasMany('App\Makanan', 'kategori_id');
    }
     public function minuman()
    {
        return $this->hasMany('App\Minuman', 'kategori_id');
    }
}
