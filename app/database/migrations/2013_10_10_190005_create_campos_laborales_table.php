<?php

use Illuminate\Database\Migrations\Migration;

class CreateCamposLaboralesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
      Schema::create('campos_laborales', function($table)
      {
        $table->increments('id');
        $table->string('nombre', 255);
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
      Schema::drop('campos_laborales');
    }

}