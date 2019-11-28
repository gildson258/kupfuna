<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{

    protected $fillable = [
        'titulo', 'autor', 'comentario', 'documento', 'user_id',
    ];
}
