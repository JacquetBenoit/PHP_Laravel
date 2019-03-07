<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public $timestamps = false;
    
    protected $table = 'category';


    public function products()
    {
        return $this->hasMany('app\product', 'id_CATEGORY', 'id_CATEGORY');
    }

}
