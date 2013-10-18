<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		//$this->call('UserTableSeeder');
		$this->call('BancosTableSeeder');
		$this->call('CamposLaboralesTableSeeder');
		$this->call('ProfesionesTableSeeder');
		$this->call('ServiciosTableSeeder');
	}

}