<?php

class ServiciosTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		// DB::table('servicios')->truncate();

		$now = date('Y-m-d');
		$servicios = array(
			array( 'nombre' => 'Digitel', 'clase_servicio' => 'Servicio_digitel', 'created_at' => $now, 'updated_at' => $now )
		);

		// Uncomment the below to run the seeder
		DB::table('servicios')->insert($servicios);
	}

}
