<?php

class ServiciosTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		// DB::table('servicios')->truncate();

		$servicios = array(
			array( 'nombre' => 'Digitel', 'clase_servicio' => 'Servicio_digitel' )
		);

		// Uncomment the below to run the seeder
		DB::table('servicios')->insert($servicios);
	}

}
