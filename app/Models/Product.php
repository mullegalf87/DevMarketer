<?php

namespace App\Models;

use DB;
use View;
use Schema;
use Request;
use Config;
use Session;
use Auth;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{   
    protected $table = 'product';

    protected $fillable = [
        'product',
    ];

    public function user()
    {
        return $this->belongsTo(Userprod::class, 'id_lesson');
    }
}

