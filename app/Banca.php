<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Banca extends Model
{
   protected $table = 'banca';
   protected $fillable = ['nome', 'valor_inicial', 'ativo'];
}
