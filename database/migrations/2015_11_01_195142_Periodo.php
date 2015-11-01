<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Periodo extends Migration
{
    public function up()
    {
        Schema::create('periodo', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->date('inicio');
            $table->date('fin');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::drop('periodo');
    }
}
