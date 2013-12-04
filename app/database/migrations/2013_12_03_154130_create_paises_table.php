<?php

use Illuminate\Database\Migrations\Migration;

class CreatePaisesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
      Schema::create('paises', function($table)
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
      Schema::drop('paises');
	}

}