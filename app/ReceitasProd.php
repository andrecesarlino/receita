<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReceitasProd extends Model
{
    protected $fillable = ['id_receita', 'id_produto', 'quantidade'];
}
