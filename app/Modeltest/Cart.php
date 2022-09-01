<?php

namespace App\Modeltest;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $connection = 'mysql';//stabilisce a quale db si deve collegare
    protected $table = 'cart';//stabilisce il nome della tabella dove estrarre i dati
    // public function product() {
    //     return $this->belongsToMany('App\Modeltest\Product','id');
    // }
}
