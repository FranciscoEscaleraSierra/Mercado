<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComentariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comentarios', function (Blueprint $table) {
            $table->id();

            $table->text('comentario');

            $table->bigInteger('producto_id')->unsigned()->nullable();
            $table->foreign('producto_id')->references('id')->on('productos');

            $table->bigInteger('compra_id')->unsigned()->nullable();
            $table->foreign('compra_id')->references('id')->on('compras');

            $table->bigInteger('consignacion_id')->unsigned()->nullable();
            $table->foreign('consignacion_id')->references('id')->on('consignaciones');

            $table->bigInteger('comentario_id')->unsigned()->nullable();
            $table->foreign('comentario_id')->references('id')->on('comentarios');

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
        Schema::dropIfExists('comentarios');
    }
}
