<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public $timestamps = false;

    protected $primaryKey = 'id_PRODUCT';

    protected $fillable = ['DESCRIPTION', 'id_CATEGORY', 'id_PROMOTION', 'IMAGE', 'NAME', 'PRICE', 'STOCK','WEIGHT'];


    public function category()
    {
        return $this->belongsTo('App\Category', 'id_CATEGORY', 'id_CATEGORY');
    }

    public function promotion()
    {
        return $this->belongsTo('App\Promotion', 'id_PROMOTION', 'id_PROMOTION');
    }

    public function command()
    {

//        return $this->belongsToMany('App\Command','command_ligne',  'id_ORDER','id_PRODUCT')->withPivot('QUANTITY');

        return $this->belongsToMany('App\Command','command_ligne', 'id_PRODUCT', 'id_ORDER', 'id_PRODUCT','id_ORDER');

    }


}
