<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstadisticasJugadoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estadisticas__jugadores', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("id_jugadorE");
            $table->unsignedBigInteger("id_localia");
            $table->unsignedBigInteger("id_equipoC");
            $table->string("resultado");
            $table->string("fg");
            $table->string("fga");
            $table->string("p3");
            $table->string("pa3");
            $table->string("ft");
            $table->string("fta");
            $table->string("asistencias");
            $table->string("robos");
            $table->string("bloqueos");
            $table->string("perdidas");
            $table->string("puntos");
            $table->date("fecha");
            $table->timestamps();

            $table->foreign("id_jugadorE")->references("id")->on("equipo__jugadors");
            $table->foreign("id_localia")->references("id")->on("localias");
            $table->foreign("id_equipoC")->references("id")->on("equipos");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('estadisticas__jugadores');
    }
}
