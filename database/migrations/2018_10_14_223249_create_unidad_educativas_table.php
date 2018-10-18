<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUnidadEducativasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('unidad_educativas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre', 255);
            $table->string('distrito');
            $table->string('direccion')->nullable();
            $table->string('capacidad');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('unidad_educativas');
    }
}
