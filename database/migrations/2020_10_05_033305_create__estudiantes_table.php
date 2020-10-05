<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstudiantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_estudiantes', function (Blueprint $table) {
            $table->bigIncrements('idestudiante');
            $table->string('nombre_estudiante',45);
            $table->string('apellido_paterno',45);
            $table->string('apellido_materno',45);
            $table->string('fecha_nacimiento',45);
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
        Schema::dropIfExists('_estudiantes');
    }
}
