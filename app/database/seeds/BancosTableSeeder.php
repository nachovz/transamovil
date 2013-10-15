<?php

class BancosTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		// DB::table('bancos')->truncate();
		$now = date( 'Y-m-d H:i:s' );
		
		$bancos = array(
			array( 'nombre' => '100% Banco', 'created_at' => $now, 'updated_at' => $now ),
			array( 'nombre' => 'BanCaribe', 'created_at' => $now, 'updated_at' => $now ),
			array( 'nombre' => 'Banco Activo', 'created_at' => $now, 'updated_at' => $now ),
			array( 'nombre' => 'Banco Agrícola de Venezuela', 'created_at' => $now, 'updated_at' => $now ),
			array( 'nombre' => 'Banco Caroní', 'created_at' => $now, 'updated_at' => $now ),
			array( 'nombre' => 'Banco de Venezuela', 'created_at' => $now, 'updated_at' => $now ),
			array( 'nombre' => 'Banco del Tesoro', 'created_at' => $now, 'updated_at' => $now ),
			array( 'nombre' => 'Banco Espírito Santo', 'created_at' => $now, 'updated_at' => $now ),
			array( 'nombre' => 'Banco Exterior', 'created_at' => $now, 'updated_at' => $now ),
			array( 'nombre' => 'Banco Guayana', 'created_at' => $now, 'updated_at' => $now ),
			array( 'nombre' => 'Banco Internacional de desarrollo C.A.', 'created_at' => $now, 'updated_at' => $now ),
			array( 'nombre' => 'Banco Mercantil', 'created_at' => $now, 'updated_at' => $now ),
			array( 'nombre' => 'Banco Nacional de Crédito', 'created_at' => $now, 'updated_at' => $now ),
			array( 'nombre' => 'Banco Occidental de Descuento', 'created_at' => $now, 'updated_at' => $now ),
			array( 'nombre' => 'Banco Plaza', 'created_at' => $now, 'updated_at' => $now ),
			array( 'nombre' => 'Banco Sofitasa', 'created_at' => $now, 'updated_at' => $now ),
			array( 'nombre' => 'Bancrecer SA', 'created_at' => $now, 'updated_at' => $now ),
			array( 'nombre' => 'Banesco', 'created_at' => $now, 'updated_at' => $now ),
			array( 'nombre' => 'Bangente', 'created_at' => $now, 'updated_at' => $now ),
			array( 'nombre' => 'Banplus', 'created_at' => $now, 'updated_at' => $now ),
			array( 'nombre' => 'BBVA Banco Provincial', 'created_at' => $now, 'updated_at' => $now ),
			array( 'nombre' => 'BFC Banco Fondo Común', 'created_at' => $now, 'updated_at' => $now ),
			array( 'nombre' => 'Citibank', 'created_at' => $now, 'updated_at' => $now ),
			array( 'nombre' => 'Corp Banca C.A.', 'created_at' => $now, 'updated_at' => $now )
		);

		// Uncomment the below to run the seeder
		DB::table('bancos')->insert($bancos);
	}

}
