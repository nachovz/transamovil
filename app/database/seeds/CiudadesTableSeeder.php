<?php

class CiudadesTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		DB::table('ciudades')->delete();

		$estado = Estado::where('nombre', '=', 'DISTRITO CAPITAL')->get()->first();

		$ciudad = new Ciudad();
		$ciudad->nombre = 'CARACAS';
		$estado->ciudades()->save($ciudad);

		$estado = Estado::where('nombre', '=', 'MIRANDA')->get()->first();

		$ciudad = new Ciudad();
		$ciudad->nombre = 'LOS TEQUES';
		$estado->ciudades()->save($ciudad);
	}

}
