<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gestion_vuelos', function (Blueprint $table) {
            $table->id();
            $table->string('Origen');
            $table->string('Destino');
            $table->string('Aereolinea');
            $table->time('Hora');
            $table->date('Fecha');
            $table->string('Clase');
            $table->integer('Precio');
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
        Schema::dropIfExists('gestion_vuelos');
    }
};
