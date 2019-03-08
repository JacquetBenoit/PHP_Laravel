<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Command_ligne extends Model
{
    public $timestamps = false;

    protected $primaryKey = 'id_ORDER_LIGNE';

    protected $table = 'command_ligne';


    public function order()
    {
        return $this->belongsTo('App\Command', 'id_ORDER', 'id_ORDER');
    }

    public function product()
    {
        return $this->belongsTo('App\product', 'id_PRODUCT', 'id_PRODUCT');
    }
}
