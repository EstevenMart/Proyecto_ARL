<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOtrasPersonasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('otras_personas', function (Blueprint $table) {
            $table->id();
            $table -> string('tipoDocumento',50);
            $table -> string('numeroDocumento',50);
            $table -> string('cargo',50);
            $table->unsignedBigInteger('accidente_id');
            $table->timestamps();

            /* $table->foreign('accidente_id')->references('id')->on('accidentes'); */
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('otras_personas');
    }
}
