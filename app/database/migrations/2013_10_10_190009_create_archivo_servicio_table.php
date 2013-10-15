<?php

use Illuminate\Database\Migrations\Migration;

class CreateArchivoServicioTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
      Schema::create('archivo_servicio', function($table)
      {
      	$table->integer('archivo_id')->unsigned();
        $table->integer('servicio_id')->unsigned();
        $table->string('label', 100);
        $table->primary(array('archivo_id', 'servicio_id'));
        $table->foreign('archivo_id')->references('id')->on('archivos');
        $table->foreign('servicio_id')->references('id')->on('servicios');
      });
    }

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
      Schema::drop('archivo_servicio');
    }

}