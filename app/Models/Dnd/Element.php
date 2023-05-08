<?php

namespace App\Models\Dnd;

use Illuminate\Database\Eloquent\Model;

class Element extends Model
{   
    protected $table = 'dnd_element';

    public function details()
    {   
        return $this->hasMany('App\Models\Dnd\GameDetail', 'id_element');
    }
}

