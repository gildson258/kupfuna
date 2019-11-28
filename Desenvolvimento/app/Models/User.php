<?php

namespace App\Models;


use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name','apelido', 'email', 'password','categoria',
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
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];



    public $rules = [
    	'name' 		=> 'required|min:2|max:100',
        'apelido'   => 'required|min:2|max:100',
    	'email' 	=> 'required|min:5|max:100',
    	'password' 	=> 'required|min:5',
    	'categoria' => 'required'
    ];

}
