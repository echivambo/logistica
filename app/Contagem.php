<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contagem extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'quantidade', 'data_contagem', 'comentario', 'user_id', 'produto_id',
    ];
}
