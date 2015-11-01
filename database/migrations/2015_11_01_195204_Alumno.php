<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Alumno extends Migration
{
    public function up()
    {
        Schema::create('alumno', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('apellidos');
            $table->string('fullname');
            $table->string('sexo');
            $table->integer('dni');
            $table->integer('telefono');
            $table->string('direccion');
            $table->integer('codigo');
            $table->string('email');
            $table->string('fechaNacimiento');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::drop('alumno');
    }
}
