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
        Schema::create('cafes', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('tipo')->default('cafe');
            $table->string('safra');
            $table->integer('quantidade');
            $table->string('data');
            $table->integer('aceitação_global');
            $table->integer('aparencia');
            $table->integer('aroma');
            $table->integer('sabor');
            $table->integer('textura');
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
        Schema::dropIfExists('cafes');
    }
};


            