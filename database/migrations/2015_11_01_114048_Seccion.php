<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Seccion extends Migration
{
    public function up()
    {
        Schema::create('seccion', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::drop('seccion');
    }
}