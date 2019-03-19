<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    protected $table = 'produit';
    public $timestamps = false;
    protected $fillable = ['nom', 'description', 'prix', 'poids', 'stock', 'id_categorie', 'image'];

    public function categorie()
    {
        return $this->belongsTo('App\Categorie');
    }
    public function promotion()
    {
        return $this->belongsTo('App\Promotion');
    }
    public function Commande()
    {
        return $this->belongsToMany('App\Commande', 'commande_produit', 'id_produit', 'id_commande', 'id', 'id_commande');
    }
}
