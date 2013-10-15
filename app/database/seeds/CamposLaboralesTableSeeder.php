<?php

class CamposLaboralesTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		// DB::table('camposlaborales')->truncate();
		$now = date( 'Y-m-d H:i:s' );		
		$camposlaborales = array(
			array( 'nombre' => 'Aeronaves/Astilleros', 'created_at' => $now, 'updated_at' => $now ),
			array( 'nombre' => 'Agrícola/Ganadería', 'created_at' => $now, 'updated_at' => $now ),
			array( 'nombre' => 'Agroindustria', 'created_at' => $now, 'updated_at' => $now ),
			array( 'nombre' => 'Aguas/Obras Sanitarias', 'created_at' => $now, 'updated_at' => $now ),
			array( 'nombre' => 'Arquitectura/Diseño/Decoración', 'created_at' => $now, 'updated_at' => $now ),
			array( 'nombre' => 'Automotriz', 'created_at' => $now, 'updated_at' => $now ),
			array( 'nombre' => 'Banca y Servicios Financieros', 'created_at' => $now, 'updated_at' => $now ),
			array( 'nombre' => 'Comercio Mayorista', 'created_at' => $now, 'updated_at' => $now ),
			array( 'nombre' => 'Comercio Minorista', 'created_at' => $now, 'updated_at' => $now ),
			array( 'nombre' => 'Construcción', 'created_at' => $now, 'updated_at' => $now ),
			array( 'nombre' => 'Consultoría/Asesoría', 'created_at' => $now, 'updated_at' => $now ),
			array( 'nombre' => 'Consumo Masivo', 'created_at' => $now, 'updated_at' => $now ),
			array( 'nombre' => 'Defensa', 'created_at' => $now, 'updated_at' => $now ),
			array( 'nombre' => 'Educación/Capacitación', 'created_at' => $now, 'updated_at' => $now ),
			array( 'nombre' => 'Energía (Gas, Petróleo, Electricidad)', 'created_at' => $now, 'updated_at' => $now ),
			array( 'nombre' => 'Entretenimiento', 'created_at' => $now, 'updated_at' => $now ),
			array( 'nombre' => 'Exportación/Importación', 'created_at' => $now, 'updated_at' => $now ),
			array( 'nombre' => 'Farmacéutica', 'created_at' => $now, 'updated_at' => $now ),
			array( 'nombre' => 'Forestal/Papel/Celulosa', 'created_at' => $now, 'updated_at' => $now ),
			array( 'nombre' => 'Gobierno', 'created_at' => $now, 'updated_at' => $now ),
			array( 'nombre' => 'Hotelería/Turismo/Restaurantes', 'created_at' => $now, 'updated_at' => $now ),
			array( 'nombre' => 'Imprenta/Editoriales', 'created_at' => $now, 'updated_at' => $now ),
			array( 'nombre' => 'Informática/Tecnología', 'created_at' => $now, 'updated_at' => $now ),
			array( 'nombre' => 'Inmobiliaria', 'created_at' => $now, 'updated_at' => $now ),
			array( 'nombre' => 'Internet', 'created_at' => $now, 'updated_at' => $now ),
			array( 'nombre' => 'Inversiones (Sociedades/Holdings)', 'created_at' => $now, 'updated_at' => $now ),
			array( 'nombre' => 'Jurídica', 'created_at' => $now, 'updated_at' => $now ),
			array( 'nombre' => 'Logística/Distribución', 'created_at' => $now, 'updated_at' => $now ),
			array( 'nombre' => 'Manufactura', 'created_at' => $now, 'updated_at' => $now ),
			array( 'nombre' => 'Materiales de Construcción', 'created_at' => $now, 'updated_at' => $now ),
			array( 'nombre' => 'Medios de Comunicación', 'created_at' => $now, 'updated_at' => $now ),
			array( 'nombre' => 'Metalmecánica y Siderurgia', 'created_at' => $now, 'updated_at' => $now ),
			array( 'nombre' => 'Minería', 'created_at' => $now, 'updated_at' => $now ),
			array( 'nombre' => 'Navieras', 'created_at' => $now, 'updated_at' => $now ),
			array( 'nombre' => 'Organizaciones sin fines de lucro', 'created_at' => $now, 'updated_at' => $now ),
			array( 'nombre' => 'Otra', 'created_at' => $now, 'updated_at' => $now ),
			array( 'nombre' => 'Pesquera/Cultivos Marinos', 'created_at' => $now, 'updated_at' => $now ),
			array( 'nombre' => 'Publicidad/Marketing/RRPP', 'created_at' => $now, 'updated_at' => $now ),
			array( 'nombre' => 'Química', 'created_at' => $now, 'updated_at' => $now ),
			array( 'nombre' => 'Recursos Humanos', 'created_at' => $now, 'updated_at' => $now ),
			array( 'nombre' => 'Salud', 'created_at' => $now, 'updated_at' => $now ),
			array( 'nombre' => 'Seguros/Previsión', 'created_at' => $now, 'updated_at' => $now ),
			array( 'nombre' => 'Servicios Varios', 'created_at' => $now, 'updated_at' => $now ),
			array( 'nombre' => 'Telecomunicaciones', 'created_at' => $now, 'updated_at' => $now ),
			array( 'nombre' => 'Textil/Confección', 'created_at' => $now, 'updated_at' => $now ),
			array( 'nombre' => 'Transporte', 'created_at' => $now, 'updated_at' => $now )
		);

		// Uncomment the below to run the seeder
		DB::table('campos_laborales')->insert($camposlaborales);
	}

}
