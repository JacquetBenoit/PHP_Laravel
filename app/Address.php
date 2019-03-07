<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    public $timestamps = false;
    
    protected $table = 'address';


    public function Customers()
    {
        return $this->hasMany('App\Customer', 'id_CUSTOMER', 'id_CUSTOMER');
    }
}
