<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Campeonato extends Model
{
    protected $table = 'campeonato';
    protected $fillable = ['nome'];
}
