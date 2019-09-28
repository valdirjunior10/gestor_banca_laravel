<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Lancamento extends Model
{
    protected $table = 'lancamento';
    protected $fillable = ['confronto', 'odd', 'entrada', 'resultado', 'mercado', 'campeonato'];


    protected static function getLancamentos()
    {
        $sql = DB::table('lancamento AS l')
            ->select('l.confronto', 'l.entrada', 'l.odd', 'l.resultado', 'l.created_at', 'm.nome AS mercado', 'c.nome AS campeonato')
            ->join('mercado as m', 'm.id', '=', 'l.mercado')
            ->join('campeonato as c', 'c.id', '=', 'l.campeonato')
            ->get();
        return $sql;
    }
}
