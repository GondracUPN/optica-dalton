<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesTable extends Migration
{
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('dni')->unique();
            $table->integer('edad');
            $table->string('distrito');
            $table->string('telefono');
            $table->string('od_lejos_esfera');
            $table->string('od_lejos_cilindro');
            $table->string('od_lejos_eje');
            $table->string('od_cerca_add');
            $table->string('oi_lejos_esfera');
            $table->string('oi_lejos_cilindro');
            $table->string('oi_lejos_eje');
            $table->string('oi_cerca_add');
            $table->string('dip_lejos');
            $table->string('dip_cerca');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('clientes');
    }
}
