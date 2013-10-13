<?php

use Illuminate\Database\Migrations\Migration;

class CreateComputadorasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
      Schema::create('computadoras', function($table)
      {
        $table->increments('id');
        $table->text('user_agent');
        $table->string('token', 100);
        $table->string('ip_address', 45);
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
      Schema::drop('computadoras');
    }

}