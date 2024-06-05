<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produtos', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('tipo');
            $table->string('marca');
            $table->string('safra');
            $table->integer('quantidade');
            $table->string('data');
            $table->integer('avaliacao_geral');
            $table->integer('nota_aroma');
            $table->integer('nota_sabor');
            $table->integer('nota_textura');
            $table->integer('nota_aparencia');
            $table->string('observacao');
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
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
        Schema::dropIfExists('produtos');
    }
};

            