<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlbunesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('albunes', function (Blueprint $table) {
            $table->id('idalbum');
            $table->string('nombre_album');
            $table->date('año');
            $table->string('formato');
            $table->double('valor');
            $table->unsignedBigInteger('iddisqueria');
            $table->foreign('iddisqueria')->references('iddisqueria')->on('disquerias');
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
        Schema::dropIfExists('albunes');
    }
}
