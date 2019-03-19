<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Adresse extends Model
{
    protected $table = 'adresse';
    public $timestamps = false;
    protected $primaryKey = 'id_adresse';

    public function utilisateur()
    {
        return $this->hasOne('App\Utilisateur', 'id_utilisateur');
    }
}
