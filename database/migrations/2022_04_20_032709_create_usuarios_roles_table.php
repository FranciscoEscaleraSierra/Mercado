<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuariosRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios_roles', function (Blueprint $table) {
          $table->bigInteger('usuarios_id')->unsigned();
          $table->foreign('usuarios_id')->references('id')->on('usuarios');

          $table->bigInteger('roles_id')->unsigned();
          $table->foreign('roles_id')->references('id')->on('roles');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuarios_roles');
    }
}
