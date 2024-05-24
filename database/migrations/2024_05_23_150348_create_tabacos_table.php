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
/*
Aparência:

Cor: A uniformidade e o tom da cor do tabaco.
Textura: A presença de veias e a consistência das folhas.
Forma: A forma e o corte do tabaco.

Aroma:

Aroma antes da queima: O cheiro do tabaco antes de ser aceso, que pode incluir notas como terrosas, florais, frutadas, amadeiradas, etc.
Aroma durante a queima: O cheiro do tabaco quando está queimando.

Sabor:

Sabor inicial: O primeiro impacto de sabor quando o tabaco é aceso.
Complexidade: A variedade de sabores percebidos, como doce, amargo, ácido, picante, entre outros.
Persistência: Quanto tempo o sabor permanece na boca após fumar.
Equilíbrio: A harmonia entre os diferentes sabores percebidos.

Queima:

Uniformidade da queima: Se o tabaco queima de forma uniforme ou se apresenta "corredores" (partes que queimam mais rápido que outras).
Velocidade da queima: A rapidez com que o tabaco queima.
Resíduos de queima: A quantidade e a cor da cinza produzida.

Sensação na boca:

Macio ou áspero: A sensação do fumo na boca e garganta.
Secura ou umidade: Se o fumo resseca a boca ou se deixa uma sensação úmida.

Satisfação geral:

Intensidade: A força do fumo, que pode ser leve, médio ou forte.
Prazer: O nível geral de satisfação do fumante com a experiência.
*/
