<?php

class PromocionalesTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		DB::table('promocionales')->delete();

		$now = date( 'Y-m-d H:i:s' );

		$promocionales = array(
			array('codigo' => '296039', 'utilizado' => TRUE, 'created_at' => $now, 'updated_at' => $now),
			array('codigo' => '789945', 'utilizado' => FALSE, 'created_at' => $now, 'updated_at' => $now),
			array('codigo' => '847991', 'utilizado' => FALSE, 'created_at' => $now, 'updated_at' => $now),
		);

		// Uncomment the below to run the seeder
		DB::table('promocionales')->insert($promocionales);
	}

}
