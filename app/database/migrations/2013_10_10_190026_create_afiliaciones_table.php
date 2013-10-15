<?php

use Illuminate\Database\Migrations\Migration;

class CreateAfiliacionesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
      Schema::create('afiliaciones', function($table)
      {
        $table->increments('id');
        $table->integer('usuario_id')->unsigned();
        $table->integer('servicio_id')->unsigned();
        $table->string('numero', 100);
        $table->string('alias', 100);
        $table->timestamps();
        $table->softDeletes();
        $table->foreign('servicio_id')->references('id')->on('servicios')->onDelete('cascade')->onUpdate('cascade');
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
      Schema::drop('afiliaciones');
    }

}