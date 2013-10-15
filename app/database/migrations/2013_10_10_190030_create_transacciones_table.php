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
        $table->integer('usuario_id')->unsigned();
        $table->integer('afiliacion_id')->unsigned();
        $table->integer('servicio_id')->unsigned();
        $table->string('numero_factura', 255)->nullable();
        $table->decimal('saldo', 8, 2);
        $table->string('descripcion', 255);
        $table->timestamp('created_at');
        $table->foreign('usuario_id')->references('id')->on('usuarios')->onDelete('cascade')->onUpdate('cascade');
        $table->foreign('afiliacion_id')->references('id')->on('afiliaciones')->onDelete('cascade')->onUpdate('cascade');
        $table->foreign('servicio_id')->references('id')->on('servicios')->onDelete('cascade')->onUpdate('cascade');
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