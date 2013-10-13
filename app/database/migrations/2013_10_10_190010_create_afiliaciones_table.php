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
        $table->integer('id');
        $table->integer('usuario_id');
        $table->integer('servicio_id');
        $table->string('numero', 100);
        $table->string('alias', 100);
        $table->timestamps();
        $table->softDeletes();
        $table->primary('id');
        $table->foreign('servicio_id')->references('id')->on('servicios');
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
      Schema::drop('afiliaciones');
    }

}