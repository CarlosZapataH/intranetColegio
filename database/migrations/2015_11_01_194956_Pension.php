<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Pension extends Migration
{
    public function up()
    {
        Schema::create('pension', function (Blueprint $table) {
            $table->increments('id');
            $table->char('valor',1);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::drop('pension');
    }
}
