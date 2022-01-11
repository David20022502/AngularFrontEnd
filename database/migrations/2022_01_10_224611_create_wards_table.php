<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wards', function (Blueprint $table) {
            //ID para la tabla de la BDD
            $table->id();
            //Columnas para la tabla de la BDD
            $table->string('name', 45);
            $table->string('location', 45);
            $table->string('state')->default(true);
            //columnas que podran aceptar registros null para la tabla de la BDD
            $table->string('description')->nullable();
            //columnas especiales para la tabla de la BDD
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
        Schema::dropIfExists('wards');
    }
}
