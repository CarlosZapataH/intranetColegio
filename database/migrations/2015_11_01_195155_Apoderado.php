<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Apoderado extends Migration
{
    public function up()
    {
        Schema::create('apoderado', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('telefono');
            $table->string('email');
            $table->string('direccion');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::drop('apoderado');
    }
}
