<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Matricula extends Migration
{
    public function up()
    {
        Schema::create('matricula', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('periodo_id')->unsigned();
            $table->integer('grado_id')->unsigned();
            $table->integer('seccion_id')->unsigned();
            $table->integer('alumno_id')->unsigned();
            $table->integer('nivel_id')->unsigned();
            $table->integer('pension_id')->unsigned();
            $table->integer('apoderado_id')->unsigned();


            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('periodo_id')->references('id')->on('periodo')->onDelete('cascade');
            $table->foreign('grado_id')->references('id')->on('grado')->onDelete('cascade');
            $table->foreign('seccion_id')->references('id')->on('seccion')->onDelete('cascade');
            $table->foreign('alumno_id')->references('id')->on('alumno')->onDelete('cascade');
            $table->foreign('nivel_id')->references('id')->on('nivel')->onDelete('cascade');
            $table->foreign('pension_id')->references('id')->on('pension')->onDelete('cascade');
            $table->foreign('apoderado_id')->references('id')->on('apoderado')->onDelete('cascade');

            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::drop('matricula');
    }
}