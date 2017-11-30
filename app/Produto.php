<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    /**
 * The attributes that are mass assignable.
 *
 * @var array
 */
    protected $fillable = [
        'name', 'descricao', 'codigo', 'user_id',
    ];
}
