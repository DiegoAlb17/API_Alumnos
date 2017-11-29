<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profes', function (Blueprint $table) {
            $table->string('dni');
            $table->string('ape_1');
            $table->string('ape_2');
            $table->string('nombre');
            $table->string('direccion');
            $table->string('localidad');
            $table->string('provincia');
            $table->string('fecha_ing');
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
        Schema::dropIfExists('profes');
    }
}
