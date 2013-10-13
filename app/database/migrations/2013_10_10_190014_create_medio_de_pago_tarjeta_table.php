<?php

use Illuminate\Database\Migrations\Migration;

class CreateMedioDePagoTarjetaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
      Schema::create('medio_de_pago_tarjeta', function($table)
      {
      	$table->integer('medio_id');
      	$table->string('fecha_vencimiento', 255);
      	$table->string('nombre_impreso', 255);
      	$table->enum('tipo', array('VISA', 'MASTER', 'AMEX'));
      	$table->primary('medio_id');
      	$table->foreign('medio_id')->references('id')->on('medios_de_pago');
      });
    }

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
      Schema::drop('medio_de_pago_tarjeta');
    }

}