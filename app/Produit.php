<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    protected $table = 'produit';
    public $timestamps = false;
    protected $fillable = ['nom', 'description', 'prix', 'poids', 'stock', 'id_categorie', 'image'];
}
