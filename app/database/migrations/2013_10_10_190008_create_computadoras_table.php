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
        $table->integer('usuario_id')->unsigned();
        $table->text('user_agent');
        $table->string('token', 100);
        $table->string('ip_address', 45);
        $table->string('nombre', 255);
        $table->timestamps();
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
      Schema::drop('computadoras');
    }

}