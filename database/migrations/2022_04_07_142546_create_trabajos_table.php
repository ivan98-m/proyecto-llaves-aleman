<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrabajosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trabajos', function (Blueprint $table) {
            $table->increments('cod_trabajo');
            $table->string('id_trabajador', 15);
            $table->foreign('id_trabajador')->references('id_trabajador')->on('trabajadores');
            $table->string('nom_trabajo', 100);
            $table->string('desc_trabajo', 45);
            $table->enum('choices', array('int','dom'));
            $table->integer('precio');
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
        Schema::dropIfExists('trabajos');
    }
}
