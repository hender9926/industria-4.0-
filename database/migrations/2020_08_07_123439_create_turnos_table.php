<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTurnosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tab_tur', function (Blueprint $table) {
            $table->bigIncrements('tur_id');
            $table->string('tur_cod');  //CODIGO DE TURNO
            $table->string('tur_nom')->nullable();  //NOMBRE DE TURNO 
            $table->time('tur_ini'); //HORA INICIO
            $table->time('tur_fin'); // HORA TÉRMINO
            $table->integer('tur_est')->default(1); // ESTADO
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
        Schema::dropIfExists('tab_tur');
    }
}
