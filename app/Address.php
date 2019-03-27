<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    public $timestamps = false;
    
    protected $table = 'address';

    protected $fillable = ['STREET1', 'STREET2', 'POSTCODE', 'TOWN', 'COUNTRY', 'id_CUSTOMER'];
    protected $primaryKey = 'id_ADDRESS';

    public function Customers()
    {
        return $this->hasMany('App\Customer', 'id_CUSTOMER', 'id_CUSTOMER');
    }
}
