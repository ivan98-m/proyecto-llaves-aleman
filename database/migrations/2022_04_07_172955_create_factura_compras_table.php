<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFacturaComprasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('factura_compras', function (Blueprint $table) {
            $table->increments('cod_factura');
            $table->string('id_proveedor',20);
            $table->foreign('id_proveedor')->references('id_proveedor')->on('proveedores');
            $table->timestamp('fecha');
            $table->integer('total');

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
        Schema::dropIfExists('factura_compras');

    }
}
