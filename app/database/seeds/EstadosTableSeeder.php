<?php

class EstadosTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		DB::table('estados')->delete();

		$pais = Pais::where('nombre', '=', 'VENEZUELA')->get()->first();

		$estado = new Estado();
		$estado->nombre = 'DISTRITO CAPITAL';
		$pais->estados()->save($estado);

		$estado = new Estado();
		$estado->nombre = 'MIRANDA';
		$pais->estados()->save($estado);
	}

}
