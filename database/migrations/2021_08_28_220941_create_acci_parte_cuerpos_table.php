<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAcciParteCuerposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('acci_parte_cuerpos', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('accidente_id');
            $table->unsignedBigInteger('parteCuerpo_id');

            $table->timestamps();

            $table->foreign('accidente_id')->references('id')->on('accidentes');
            $table->foreign('parteCuerpo_id')->references('id')->on('parte_cuerpos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('acci_parte_cuerpos');
    }
}
