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

class Userprod extends Model
{
    protected $table = 'lesson_php';

    protected $fillable = [
        'firstname',
        'email',
    ];

    public function products()
    {
        return $this->hasMany(Product::class, 'id_lesson');
    }
}
