<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTracksTable extends Migration
{

    public function up()
    {
        Schema::create('tracks', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('image')->default('tracks_default.jpg');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('tracks');
    }
}
