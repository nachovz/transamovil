<?php

use Illuminate\Database\Migrations\Migration;

class CreateArchivoUsuarioTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
      Schema::create('archivo_usuario', function($table)
      {
      	$table->integer('archivo_id');
      	$table->integer('usuario_id');
      	$table->string('label', 100);
      	$table->primary(array('archivo_id', 'usuario_id'));
      	$table->foreign('archivo_id')->references('id')->on('archivos');
        $table->foreign('usuario_id')->references('id')->on('usuarios');
      });
    }

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
      Schema::drop('archivo_usuario');
    }

}