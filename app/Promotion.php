<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Promotion extends Model
{
    public $timestamps = false;
    
    protected $table = 'promotion';


    public function products()
    {
        return $this->hasMany('App\product', 'id_PROMOTION', 'id_PROMOTION');
    }
}
