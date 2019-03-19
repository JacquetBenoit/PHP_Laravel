<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Utilisateur extends Model
{
    protected $table = 'utilisateur';
    public $timestamps = false;
    protected $primaryKey = 'id_utilisateur';

    public function adresse()
    {
        return $this->belongsTo('App\Adresse');
    }
}
