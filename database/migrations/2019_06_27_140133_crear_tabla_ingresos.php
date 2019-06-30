<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaIngresos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ingresos', function (Blueprint $table) {
            $table->bigIncrements('idingreso');
            $table->tinyInteger('idproveedor');
            $table->tinyInteger('idusuario');
            $table->string('tipo_comprobante', 20);
            $table->string('serie_comprobante', 20);
            $table->string('num_comprobante', 20);
            $table->string('dateTime');
            $table->decimal('impuesto', 4, 2);
            $table->decimal('total_compra', 11, 2);
            $table->string('estado', 20);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ingresos');
    }
}
