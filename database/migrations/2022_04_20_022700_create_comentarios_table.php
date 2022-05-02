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

            $table->bigInteger('comentarios_id');
            $table->string('comentarios_tipo');

            $table->bigInteger('usuario_id')->unsigned()->nullable();
            $table->foreign('usuario_id')->references('id')->on('usuarios');

            $table->bigInteger('comentario_id')->unsigned()->nullable();
            $table->foreign('comentario_id')->references('id')->on('comentarios');

            $table->timestamps();
            $table->softDeletes();
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
