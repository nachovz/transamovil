<?php

use Illuminate\Database\Migrations\Migration;

class CreateBancosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
      Schema::create('bancos', function($table)
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
      Schema::drop('bancos');
    }

}