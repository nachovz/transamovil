<?php

class PaisesTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		DB::table('paises')->delete();

		$now = date( 'Y-m-d H:i:s' );

		// Uncomment the below to run the seeder
		$pais = new Pais();
		$pais->id = 862;
		$pais->nombre = 'Venezuela';
		$pais->save();
	}

}
