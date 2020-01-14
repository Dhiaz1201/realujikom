<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class minuman extends Model
{
    public function kategori()
    {
        return $this->belongsTo('App\Kategori', 'kategori_id');
    }
}
