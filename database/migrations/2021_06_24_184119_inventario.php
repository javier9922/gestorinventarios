<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Inventario extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventario', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('clasificacion');
            $table->string('descripcion');
            $table->string('valor');

            $table->unsignedInteger('reguardante_id');
            $table->foreign('reguardante_id')->references('codigo')->on('reguardante');

            $table->string('ubicacion');
            $table->string('origen');
            $table->string('estatus');
            $table->string('vinculado');

            $table->unsignedInteger('tipo_id');
            $table->foreign('tipo_id')->references('id')->on('tipo');
            
            $table->unsignedInteger('resguardo_id');
            $table->foreign('resguardo_id')->references('id')->on('resguardo');
            

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
        Schema::dropIfExists('inventario');
    }
}
