<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Command extends Model
{
    public $timestamps = false;

    protected $primaryKey = 'id_ORDER';

    protected $table = 'command';


    public function product()
    {
        return $this->belongsToMany('App\product', 'command_ligne', 'id_PRODUCT', 'id_ORDER', 'id_ORDER', 'id_PRODUCT');
    }

    public function customer()
    {
        return $this->belongsTo('App\Customer', 'id_CUSTOMER', 'id_CUSTOMER');
    }

}
