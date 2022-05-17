<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriarTabelaComprovantes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comprovantes', function(Blueprint $table){
            $table->increments('id');
            $table->string('nome');
            $table->string('sobrenome');
            $table->string('email');
            $table->string('rua');
            $table->string('bairro');
            $table->string('numero');
            $table->string('complemento');
            $table->string('cidade');
            $table->string('estado');
            $table->string('status');
            $table->string('observacoes');
            $table->string('imagem');
           // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('comprovantes');
    }
}
