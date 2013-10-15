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
      	$table->integer('archivo_id')->unsigned();
      	$table->integer('usuario_id')->unsigned();
      	$table->string('label', 100);
      	$table->primary(array('archivo_id', 'usuario_id'));
      	$table->foreign('archivo_id')->references('id')->on('archivos')->onDelete('cascade')->onUpdate('cascade');
        $table->foreign('usuario_id')->references('id')->on('usuarios')->onDelete('cascade')->onUpdate('cascade');
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