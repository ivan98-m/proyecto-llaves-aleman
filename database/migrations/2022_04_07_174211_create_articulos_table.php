<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticulosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articulos', function (Blueprint $table) {
            $table->string('cod_articulo', 15)->primary();
            $table->string('id_proveedor',20);
            $table->foreign('id_proveedor')->references('id_proveedor')->on('proveedores');
            $table->string('art_nombre', 50);
            $table->string('art_descripcion');
            $table->integer('p_venta');
            $table->integer('p_proveedor');
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
        Schema::dropIfExists('articulos');
    }
}
