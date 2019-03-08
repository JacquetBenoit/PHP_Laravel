<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Adresse extends Model
{
    public function utilisateur()
    {
        return $this->hasOne('App\Utilisateur', 'id_utilisateur');
    }
}
