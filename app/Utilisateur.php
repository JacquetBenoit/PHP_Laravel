<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Utilisateur extends Model
{
    public function adresse()
    {
        return $this->belongsTo('App\Adresse');
    }
}
