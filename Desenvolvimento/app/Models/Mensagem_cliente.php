<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mensagem_cliente extends Model
{
    //
    protected $fillable = [
        'name','email', 'mensagem'
    ];
}
