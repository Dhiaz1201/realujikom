<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Galery extends Model
{
  public function kategorifoto(){
      return $this->belongsTo('App\KategoriFoto','kategori_foto_id');
  }
}
