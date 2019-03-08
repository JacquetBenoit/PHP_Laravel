<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
    protected $table = 'commande';
    public $timestamps = false;
    protected $primaryKey = 'id_commande';

    public function produit()
    {
        return $this->belongsToMany('App\Produit', 'produit', 'id_produit', 'id_commande');
    }
}
