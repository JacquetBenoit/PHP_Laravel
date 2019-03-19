<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
    protected $table = 'commande';
    public $timestamps = false;
    protected $primaryKey = 'id_commande';

    public function produits()
    {
        return $this->belongsToMany('App\Produit', 'commande_produit','id_commande', 'id_produit', 'id_commande', 'id');
    }
}
