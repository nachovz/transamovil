<?php

use Illuminate\Database\Migrations\Migration;

class AlterUsuarioTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{

        Schema::table('usuarios', function($table)
        {
            $table->string('emaila',255)->nullable()->after('email');
        });

	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        Schema::table('usuarios', function($table)
        {
            $table->dropColumn('emaila');
        });
	}

}