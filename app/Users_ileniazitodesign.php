<?php
 
namespace App;
 

use Illuminate\Foundation\Auth\User as Authenticatable;
 
class Users_ileniazitodesign extends Authenticatable
{
    
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nickname', 'password', 'password_decript','email', 'level',
    ];
    
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

        /**
     * Add a mutator to ensure hashed passwords
     */
    // public function setPasswordAttribute($password)
    // {
    //     $this->attributes['password'] = bcrypt($password);
    // }
    

}