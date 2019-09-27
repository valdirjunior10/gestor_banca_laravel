<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TableBanca extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('banca', function(Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome', 200);
            $table->double('valor_inicial', 10,2)->default(0);
            $table->boolean('ativo')->deault(true);
            $table->timestamps();            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
