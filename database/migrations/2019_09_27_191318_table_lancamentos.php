<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TableLancamentos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lancamento', function(Blueprint $table) {
            $table->autoIncrements('id');
            $table->string('confronto', 255);
            $table->double('odd', 10,2);
            $table->double('entrada', 10,2);
            $table->double('resultado', 10,2);
            $table->integer('mercado');
            $table->integer('campeonato');
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
