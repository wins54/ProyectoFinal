<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDesempenoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('desempeno', function (Blueprint $table) {
            $table->increments('idD');
            $table->string('nombreD');
            $table->string('fechaF');
            $table->integer('idM')->unsigned();
            $table->foreign('idM')->references('id')->on('mascotas');
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
        Schema::dropIfExists('desempeno');
    }
}
