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
        Schema::create('tabacos', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('tipo')->default('tabaco');
            $table->integer('quantidade');
            $table->string('cor');
            $table->string('textura');
            $table->string('corte');
            $table->integer('sabor_inicial');
            $table->integer('complexidade');
            $table->integer('persistência');
            $table->integer('equilibrio');
            $table->integer('uniformidade_da_queima');
            $table->integer('velocidade_da_queima');
            $table->integer('resíduos_de_queima');
            $table->string('sensação_na_boca');
            $table->integer('satisfação_geral');
            $table->string('data');
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
        Schema::dropIfExists('tabacos');
    
    }
};

