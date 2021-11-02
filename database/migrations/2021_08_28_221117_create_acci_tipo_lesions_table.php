<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAcciTipoLesionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('acci_tipo_lesions', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('accidente_id');
            $table->unsignedBigInteger('Lesion_id');

            $table->timestamps();

            $table->foreign('accidente_id')->references('id')->on('accidentes');
            $table->foreign('Lesion_id')->references('id')->on('lesions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('acci_tipo_lesions');
    }
}
