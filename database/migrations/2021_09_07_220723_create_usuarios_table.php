<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
            $table -> string('nombre',50);
            $table -> string('apellido',50);
            $table -> integer('numeroDocumento')->unique();
            $table -> string('imagen',1500);
            $table -> string('correo',50);
            $table -> integer('telefono');
            $table -> date('fechaNacimiento');
            $table -> string('sexo',50);
            $table -> string('sangre',50);
            $table -> string('direccion',50);
            $table -> string('jornada',50);
            $table -> date('fechaIngreso',50);
            $table -> string('vinculacion',50);
            $table -> string('estado',50);
            $table->unsignedBigInteger('municipio_id');
            $table->unsignedBigInteger('tipoDocumento_id');
            $table->unsignedBigInteger('cargo_id');
            $table->unsignedBigInteger('rol_id');
            $table->unsignedBigInteger('afp_id');
            $table->unsignedBigInteger('arp_id');
            $table->unsignedBigInteger('eps_id');


            $table->timestamps();

            $table->foreign('municipio_id')->references('id')->on('municipios');
            $table->foreign('tipoDocumento_id')->references('id')->on('tipo_documentos');
            $table->foreign('cargo_id')->references('id')->on('cargos');
            $table->foreign('rol_id')->references('id')->on('rols');
            $table->foreign('afp_id')->references('id')->on('afps');
            $table->foreign('arp_id')->references('id')->on('arps');
            $table->foreign('eps_id')->references('id')->on('eps');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuarios');
    }
}
