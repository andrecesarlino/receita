<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Receita_produto extends Model
{
    protected $fillable = ['id_receita', 'id_produto', 'quantidade'];
}
