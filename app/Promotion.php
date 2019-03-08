<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Promotion extends Model
{
    protected $table = 'promotion';
    public $timestamps = false;

    public function produit()
    {
        return $this->hasOne('App\Produit', 'id_promotion');
    }
}
