<?php

use Illuminate\Database\Migrations\Migration;

class CreateServiciosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
      Schema::create('servicios', function($table)
      {
        $table->increments('id');
        $table->string('nombre', 175);
        $table->string('clase_servicio', 125);
		$table->timestamps();
      });
    }

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
      Schema::drop('servicios');
    }

}