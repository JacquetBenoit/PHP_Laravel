<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    protected $table = 'categorie';
    public $timestamps = false;
    protected $primaryKey = 'id_categorie';

    public function produit()
    {
        return $this->hasMany('App\Produit', 'id_categorie');
    }
}
