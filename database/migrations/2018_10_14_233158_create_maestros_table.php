<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMaestrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('maestros', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('ci')->unique();
            $table->string('nombre', 255);
            $table->string('materia');
            $table->string('experiencia');
            //$table->string('foto')->nullable();
            $table->integer('unidad_educativa_id');
            $table->foreign('unidad_educativa_id')->references('id')->on('unidad_educativas');
            //$table->foreign('unidad_id')->references('id')->on('unidad_educativas');
            //$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('maestros');
    }
}
