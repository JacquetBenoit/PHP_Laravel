<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public $timestamps = false;

    protected $primaryKey = 'id_PRODUCT';

    protected $fillable = ['DESCRIPTION', 'id_CATEGORY', 'id_PROMOTION', 'IMAGE', 'NAME', 'PRICE', 'STOCK','WEIGHT'];

}
