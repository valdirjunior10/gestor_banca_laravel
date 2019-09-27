<?php

namespace App\Http\Controllers;

use App\Banca;
use Illuminate\Http\Request;

class BancaController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        return Banca::all();
    }

    public function getId($id) {
        return Banca::find($id);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $dados = $request0>all();
        $banca = new Banca();
        $banca->fill($dados);
        $banca->save();
        
        return ['status' => 'OK'];
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Banca  $banca
     * @return \Illuminate\Http\Response
     */
    public function show(Banca $banca) {
        //
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Banca  $banca
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        $dados = $request->all();   
        $dados['ativo'] = true;
        $banca = Banca::find($id);
        $banca->fill($dados);
        $banca->save();
        return ['status' => 'OK'];
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Banca  $banca
     * @return \Illuminate\Http\Response
     */
    public function destroy(Banca $banca) {
        //
    }

}
