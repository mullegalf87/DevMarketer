<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Users_dnd extends Authenticatable
{   
    protected $table="users_dnds";
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'lastname', 'username', 'email', 'password', 'pwd_decrypt',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

}
