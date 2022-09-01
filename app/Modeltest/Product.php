<?php

namespace App\Modeltest;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $connection = 'mysql2';//stabilisce a quale db si deve collegare
    protected $table = 'product';//stabilisce il nome della tabella dove estrarre i dati

    // public function product() {
    //     return $this->belongsToMany('App\Modeltest\Cart','id_prod');

    // }
}
