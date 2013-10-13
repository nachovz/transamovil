<?php

use Illuminate\Database\Migrations\Migration;

class CreateProfesionesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
      Schema::create('profesiones', function($table)
      {
        $table->increments('id');
        $table->string('nombre', 200);
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
      Schema::drop('profesiones');
    }

}