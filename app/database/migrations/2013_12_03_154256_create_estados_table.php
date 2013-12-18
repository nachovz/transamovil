<?php

use Illuminate\Database\Migrations\Migration;

class CreateEstadosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
      Schema::create('estados', function($table)
      {
        $table->increments('id');
        $table->string('nombre', 200);
        $table->integer('pais_id')->unsigned();
        $table->timestamps();
        $table->foreign('pais_id')->references('id')->on('paises')->onDelete('cascade')->onUpdate('cascade');
      });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
      Schema::drop('estados');
	}

}