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
            $table -> string('tipoaccidente',50);
            $table -> date('fechaHora');
            $table -> string('dia',50);
            $table -> string('jornada',50);
            $table -> string('laborHabitual',50);
            $table -> string('tiempoPA',50);
            $table -> integer('cantHoras');
            $table -> integer('cantMinutos');
            $table -> string('empresa',50);
            $table -> string('causaMuerte',50);
            $table -> text('descripcion',500);
            $table->unsignedBigInteger('mecanismo_id');
            $table->unsignedBigInteger('agente_id');
            $table->unsignedBigInteger('sitio_id');

            $table->timestamps();


            $table->foreign('mecanismo_id')->references('id')->on('mecanismos');
            $table->foreign('agente_id')->references('id')->on('agentes');
            $table->foreign('sitio_id')->references('id')->on('sitios');

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
