<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entrada extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'quantidade', 'data_entreda', 'comentario', 'franquia_id', 'produto_id', 'user_id',
    ];
}
