<?php

use Illuminate\Database\Migrations\Migration;

class AlterUsuarioDireccionesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
	    DB::statement("ALTER TABLE  usuario_direcciones CHANGE pais pais INT(10) UNSIGNED NOT NULL");
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		DB::statement("ALTER TABLE  usuario_direcciones CHANGE pais pais VARCHAR(255) NOT NULL");
	}

}