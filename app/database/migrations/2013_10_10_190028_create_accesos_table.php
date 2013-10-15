<?php

use Illuminate\Database\Migrations\Migration;

class CreateAccesosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
      Schema::create('accesos', function($table)
      {
        $table->increments('id');
        $table->integer('computadora_id')->unsigned();
        $table->string('ip_address', 45);
        $table->timestamps();
        $table->foreign('computadora_id')->references('id')->on('computadoras')->onDelete('cascade')->onUpdate('cascade');
      });
    }

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
      Schema::drop('accesos');
    }

}