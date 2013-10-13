<?php

use Illuminate\Database\Migrations\Migration;

class CreateTransaccionesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
      Schema::create('transacciones', function($table)
      {
        $table->increments('id');
        $table->integer('usuario_id');
        $table->integer('afiliacion_id');
        $table->integer('servicio_id');
        $table->string('numero_factura', 255);
        $table->decimal('saldo', 8, 2);
        $table->string('descripcion', 255);
        $table->timestamp('created_at');
        $table->foreign('usuario_id')->references('id')->on('usuarios');
        $table->foreign('afiliacion_id')->references('id')->on('afiliaciones');
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
      Schema::drop('transacciones');
    }

}