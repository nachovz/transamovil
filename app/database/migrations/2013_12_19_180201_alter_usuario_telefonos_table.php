<?php

use Illuminate\Database\Migrations\Migration;

class AlterUsuarioTelefonosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::table('usuario_telefonos', function($table)
        {
            $table->string('prefijo', 20)->nullable()->after('numero');
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{

        Schema::table('usuario_telefonos', function($table)
        {
            $table->dropColumn('prefijo');
        });
	}

}