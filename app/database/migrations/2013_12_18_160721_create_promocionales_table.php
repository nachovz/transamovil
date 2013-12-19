<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePromocionalesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('promocionales', function(Blueprint $table) {
			$table->increments('id');
			$table->string('codigo');
			$table->boolean('utilizado')->nullable()->default(FALSE);
			$table->timestamps();
			$table->softDeletes();
			$table->unique('codigo');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('promocionales');
	}

}
