<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tab_prod', function (Blueprint $table) {
            $table->bigIncrements('prod_id');
            $table->string('prod_cod');
            $table->string('prod_des');
            $table->string('prod_min');
            $table->string('prod_max');            
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
        Schema::dropIfExists('tab_prod');
    }
}