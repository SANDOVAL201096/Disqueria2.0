<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTemasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('temas', function (Blueprint $table) {
            $table->id('idtema');
            $table->string('titulo');
            $table->unsignedBigInteger('ididioma');
            $table->foreign('ididioma')->references('ididioma')->on('idiomas');
            $table->unsignedBigInteger('idartista');
            $table->foreign('idartista')->references('idartista')->on('artistas');
            $table->unsignedBigInteger('idgenero');
            $table->foreign('idgenero')->references('idgenero')->on('generos');
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
        Schema::dropIfExists('temas');
    }
}
