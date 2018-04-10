<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLayout2Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('layout2', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo');
            $table->string('texto');
            $table->string('nombre');
            $table->string('img');
            $table->string('nombre2');
            $table->string('img2');
            $table->string('nombre3');
            $table->string('img3');
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
        Schema::dropIfExists('layout2');
    }
}
