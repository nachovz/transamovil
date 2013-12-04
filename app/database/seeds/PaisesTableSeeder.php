<?php

class PaisesTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		DB::table('paises')->delete();

		$now = date( 'Y-m-d H:i:s' );

		$paises = array(
			array ( 'nombre' => 'VENEZUELA', 'created_at' => $now, 'updated_at' => $now ),
		);

		// Uncomment the below to run the seeder
		DB::table('paises')->insert($paises);
	}

}
