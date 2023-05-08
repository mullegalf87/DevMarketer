<?php

namespace App\Models\Dnd;

use Illuminate\Database\Eloquent\Model;

class GameDetail extends Model
{   
    protected $table = 'dnd_game_detail';

    public function elements()
    {   
        return $this->belongsTo('App\Models\Dnd\Element', 'id_element');
    }
}

