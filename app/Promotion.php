<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Promotion extends Model
{
    protected $table = 'promotion';
    public $timestamps = false;
    protected $primaryKey = 'id_promotion';

    public function produit()
    {
        return $this->hasOne('App\Produit', 'id_promotion');
    }
}
