<?php

namespace App;

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
        'name', 'email', 'password',
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

        'name' => 'required|min:2|max:45',
        'email' => 'required|min:5|max:45',
        'password' => 'required|min:5|max:45',
        'categoria' => 'required';
    ];

    public $message = [
        'name.required' => 'O campo nome é de preenchimento obrigatório.',
        'email.required'=> 'O campo nome é de preenchimento obrigatório.'

    ];

}
