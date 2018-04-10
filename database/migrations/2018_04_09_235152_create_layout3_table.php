<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLayout3Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('layout3', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo');
            $table->string('texto');
            $table->string('texto2');
            $table->string('texto3');
            $table->string('texto4');
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
        Schema::dropIfExists('layout3');
    }
}
