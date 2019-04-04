<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnunciosProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anuncios_productos', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->unsignedBigInteger('producto_id');
          $table->string('titulo');
          $table->text('descripcion');
          $table->string('url');
          $table->boolean('publicado')->default(false);
          $table->timestamps();

          $table->foreign('producto_id')->references('id')->on('productos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('anuncios_productos');
    }
}
