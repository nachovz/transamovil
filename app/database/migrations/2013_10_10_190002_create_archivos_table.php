<?php

use Illuminate\Database\Migrations\Migration;

class CreateArchivosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
      Schema::create('archivos', function($table)
      {
        $table->increments('id');
        $table->string('basedir', 255);
        $table->string('filename', 255);
        $table->string('mime_type', 255);
        $table->integer('size');
        $table->integer('width');
        $table->integer('height');
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
      Schema::drop('archivos');
    }

}