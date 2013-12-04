<?php

class MunicipiosTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		DB::table('municipios')->delete();

		$estado = Estado::where('nombre', '=', 'DISTRITO CAPITAL')->get()->first();

		$municipio = new Municipio();
		$municipio->nombre = 'LIBERTADOR';
		$estado->municipios()->save($municipio);

		$estado = Estado::where('nombre', '=', 'MIRANDA')->get()->first();

		$municipio = new Municipio();
		$municipio->nombre = 'CHACAO';
		$estado->municipios()->save($municipio);

		$municipio = new Municipio();
		$municipio->nombre = 'SUCRE';
		$estado->municipios()->save($municipio);

		$municipio = new Municipio();
		$municipio->nombre = 'BARUTA';
		$estado->municipios()->save($municipio);
	}

}
