<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAcciUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('acci_user', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('accidente_id');
            $table->unsignedBigInteger('usuario_id');

            $table->timestamps();

            $table->foreign('accidente_id')->references('id')->on('accidentes');
            $table->foreign('usuario_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('acci_user');
    }
}
