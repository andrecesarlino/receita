<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Receita extends Model
{
    protected $fillable = ['numero', 'valor', 'id_pessoa', 'id_cultura'];
}
