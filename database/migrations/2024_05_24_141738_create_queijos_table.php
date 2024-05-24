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
        Schema::create('queijos', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('tipo')->default('queijo');
            $table->integer('quantidade');
            $table->integer('avaliacao_geral');
            $table->integer('textura');
            $table->integer('aparencia');
            $table->integer('aroma');
            $table->integer('sabor');
            $table->string('sensação_na_boca');
            $table->string('sonoridade');
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
        Schema::dropIfExists('queijos');
    }
};
