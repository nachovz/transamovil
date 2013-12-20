<?php

use Illuminate\Database\Migrations\Migration;

class CreateUsuarioTelefonosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
      Schema::create('usuario_telefonos', function($table)
      {
        $table->increments('id');
        $table->integer('usuario_id')->unsigned();
        $table->enum('tipo', array('Casa', 'Oficina', 'Celular'));
        $table->string('numero', 20);
        $table->string('prefijo', 20)->nullable();
        $table->timestamps();
        //$table->primary(array('usuario_id', 'tipo', 'numero'));
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
      Schema::drop('usuario_telefonos');
    }

}