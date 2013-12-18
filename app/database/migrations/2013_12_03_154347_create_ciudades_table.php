<?php

use Illuminate\Database\Migrations\Migration;

class CreateCiudadesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
      Schema::create('ciudades', function($table)
      {
        $table->increments('id');
        $table->string('nombre', 200);
        $table->integer('estado_id')->unsigned();
        $table->timestamps();
        $table->foreign('estado_id')->references('id')->on('estados')->onDelete('cascade')->onUpdate('cascade');
      });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
      Schema::drop('ciudades');
	}

}