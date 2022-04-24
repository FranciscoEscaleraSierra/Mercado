<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRolesPermisosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roles_permisos', function (Blueprint $table) {
          $table->bigInteger('roles_id')->unsigned();
          $table->foreign('roles_id')->references('id')->on('roles');

          $table->bigInteger('pemisos_id')->unsigned();
          $table->foreign('pemisos_id')->references('id')->on('permisos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('roles_permisos');
    }
}
