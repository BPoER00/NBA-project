<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEquipoJugadorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipo__jugadors', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("id_equipo");
            $table->unsignedBigInteger("id_jugador");
            $table->double("asistencias");
            $table->double("robos");
            $table->double("bloqueos");
            $table->double("perdidas");
            $table->double("puntos");
            $table->string("partidos");
            $table->timestamps();

            $table->foreign("id_equipo")->references("id")->on("equipos");
            $table->foreign("id_jugador")->references("id")->on("jugador");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('equipo__jugadors');
    }
}
