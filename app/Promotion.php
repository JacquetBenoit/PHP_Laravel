<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Promotion extends Model
{
    public $timestamps = false;
    
    protected $table = 'promotion';

    protected $primaryKey = 'id_PROMOTION';

    protected $fillable = ['START_DATE', 'END_DATE', 'PERCENT', 'VALUE'];


    public function products()
    {
        return $this->hasMany('App\product', 'id_PROMOTION', 'id_PROMOTION');
    }
}
