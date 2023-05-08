<?php

// App/Models/bookmap/Product.php
namespace App\Models\bookmap;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{   
    protected $connection = 'mysql3'; // aggiunto il nome della connessione
    protected $table = 'products_bookmap';
}

