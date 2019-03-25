<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    public $timestamps = false;

    protected $primaryKey = 'id_CUSTOMER';

    protected $table = 'customer';

    protected $fillable = ['EMAIL', 'FIRSTNAME', 'id_CUSTOMER', 'NAME', 'PASSWORD'];



    public function address()
    {
        return $this->belongsTo('App\Address', 'id_CUSTOMER', 'id_CUSTOMER');
    }

    public function commands()
    {
        return $this->hasMany('App\Command', 'id_CUSTOMER', 'id_CUSTOMER');
    }

    public function user()
    {
        return $this->belongsTo('App\User', 'id_USER', 'id');
    }

}
