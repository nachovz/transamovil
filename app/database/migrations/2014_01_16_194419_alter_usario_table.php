<?php

use Illuminate\Database\Migrations\Migration;

class AlterUsarioTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::table('usuarios', function($table)
        {
            $table->string('image_id');
            $table->string('image_card');
            $table->string('image_avatar');
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
            $table->dropColumn('image_id');
            $table->dropColumn('image_card');
            $table->dropColumn('image_avatar');
        });

	}

}