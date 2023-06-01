<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEquiposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipos', function (Blueprint $table) {
            $table->id();
            $table->string("nombre", 30);
            $table->string("siglas", 5);
            $table->string("cancha", 100);
            $table->bigInteger("titulos");
            $table->bigInteger("victorias");
            $table->bigInteger("derrotas");
            $table->unsignedBigInteger("id_conferencia");
            $table->integer("estado")->default(1);
            $table->timestamps();

            $table->foreign("id_conferencia")->references("id")->on("conferencias");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('equipos');
    }
}
