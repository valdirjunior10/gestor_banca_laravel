<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mercado extends Model
{
    protected $table = 'mercado';
    protected $fillable = ['nome'];
}
