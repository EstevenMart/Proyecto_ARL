<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccidentesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accidentes', function (Blueprint $table) {
            $table->id();
            $table->idParteCuerpo();
            $table->idTipoLesion ();
            $table->idMecanismo ();
            $table->idAgentAcci ();
            $table->idSitio ();
            $table->tipoaccidente();
            $table->fechaHora();
            $table->dia();
            $table->jornada();
            $table->laborHabitual();
            $table->tiempoPA();
            $table->cantHoras();
            $table->cantMinutos();
            $table->empresa();
            $table->causaMuerte();
            $table->descripcion();
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
        Schema::dropIfExists('accidentes');
    }
}
