<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Grado extends Migration
{
    public function up()
    {
        Schema::create('grado', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::drop('grado');
    }
}
