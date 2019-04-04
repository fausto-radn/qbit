<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnunciosServiciosTable extends Migration
{
  /**
  * Run the migrations.
  *
  * @return void
  */
  public function up()
  {
    Schema::create('anuncios_servicios', function (Blueprint $table) {
      $table->bigIncrements('id');
      $table->unsignedBigInteger('servicio_id');
      $table->string('titulo');
      $table->text('descripcion');
      $table->string('url');
      $table->boolean('publicado')->default(false);
      $table->timestamps();

      $table->foreign('servicio_id')->references('id')->on('servicios');
    });
  }

  /**
  * Reverse the migrations.
  *
  * @return void
  */
  public function down()
  {
    Schema::dropIfExists('anuncios_servicios');
  }
}
