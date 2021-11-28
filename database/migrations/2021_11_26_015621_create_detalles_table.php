<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetallesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalles', function (Blueprint $table) {
            $table->id('iddetalle');
            $table->integer('cantidad');
            $table->unsignedBigInteger('idfactura');
            $table->foreign('idfactura')->references('idfactura')->on('facturas');
            $table->unsignedBigInteger('idalbum');
            $table->foreign('idalbum')->references('idalbum')->on('albunes');
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
        Schema::dropIfExists('detalles');
    }
}
