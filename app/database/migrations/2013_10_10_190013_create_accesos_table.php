<?php

use Illuminate\Database\Migrations\Migration;

class CreateAccesosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
      Schema::create('accesos', function($table)
      {
        $table->integer('usuario_id');
        $table->integer('computadora_id');
        $table->string('ip_address', 45);
        $table->timestamps();
        $table->primary(array('usuario_id', 'computadora_id'));
        $table->foreign('usuario_id')->references('id')->on('usuarios');
        $table->foreign('computadora_id')->references('id')->on('computadoras');
      });
    }

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
      Schema::drop('accesos');
    }

}