<?php

use Illuminate\Database\Migrations\Migration;

class CreateUsuarioDireccionesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
      Schema::create('usuario_direcciones', function($table)
      {
      	$table->increments('id');
        $table->integer('usuario_id')->unsigned();
        $table->enum('tipo', array('Principal', 'Oficina', 'Habitacion'));
        $table->string('pais');
        $table->integer('estado')->unsigned()->nullable();
        $table->integer('municipio')->unsigned()->nullable();
        $table->integer('ciudad')->unsigned()->nullable();
        $table->text('direccion');

        $table->timestamps();
        $table->index(array('usuario_id', 'tipo'));
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
      Schema::drop('usuario_direcciones');
	}

}