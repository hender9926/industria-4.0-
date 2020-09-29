<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePesajeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tab_pesa', function (Blueprint $table) {
            $table->bigIncrements('pesa_id');
            $table->string('pesa_fk_prod');
            $table->string('pesa_peso')->nullable();
            $table->integer('pesa_est')->default(1); //se inicia abierto // '0' es cerrado
            $table->integer('pesa_proc')->default(1); //estado de proceso se crea abierto // '0' es cerrado
            $table->string('pesa_est_peso', 1)->nullable(); // S = SOBREPESO | B = BAJO PESO;
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
        Schema::dropIfExists('tab_pesa');
    }
}
