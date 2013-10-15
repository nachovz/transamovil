<?php

class ProfesionesTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		// DB::table('profesiones')->truncate();
		$now = date( 'Y-m-d H:i:s' );
		$profesiones = array(
			array( 'nombre' => 'Administración y Gerencia', 'created_at' => $now, 'updated_at' => $now ),
			array( 'nombre' => 'Agronomía y Veterinaria', 'created_at' => $now, 'updated_at' => $now ),
			array( 'nombre' => 'Albañiles y Obreros', 'created_at' => $now, 'updated_at' => $now ),
			array( 'nombre' => 'Arquitectura y Construcción', 'created_at' => $now, 'updated_at' => $now ),
			array( 'nombre' => 'Arte y Cultura', 'created_at' => $now, 'updated_at' => $now ),
			array( 'nombre' => 'Belleza y Estética', 'created_at' => $now, 'updated_at' => $now ),
			array( 'nombre' => 'Bienestar Social', 'created_at' => $now, 'updated_at' => $now ),
			array( 'nombre' => 'Carpinteros y Tapiceros', 'created_at' => $now, 'updated_at' => $now ),
			array( 'nombre' => 'Cerrajeros', 'created_at' => $now, 'updated_at' => $now ),
			array( 'nombre' => 'Cocineras(os)', 'created_at' => $now, 'updated_at' => $now ),
			array( 'nombre' => 'Comercio Exterior y Rel.Internacionales', 'created_at' => $now, 'updated_at' => $now ),
			array( 'nombre' => 'Compras', 'created_at' => $now, 'updated_at' => $now ),
			array( 'nombre' => 'Comunicación Social y Rel. Públicas', 'created_at' => $now, 'updated_at' => $now ),
			array( 'nombre' => 'Conductores y Chóferes', 'created_at' => $now, 'updated_at' => $now ),
			array( 'nombre' => 'Conserjes y Trabajo del Hogar', 'created_at' => $now, 'updated_at' => $now ),
			array( 'nombre' => 'Consultoría', 'created_at' => $now, 'updated_at' => $now ),
			array( 'nombre' => 'Contabilidad y Auditoría', 'created_at' => $now, 'updated_at' => $now ),
			array( 'nombre' => 'Costureras y Sastres', 'created_at' => $now, 'updated_at' => $now ),
			array( 'nombre' => 'Cuidado de Adultos y Niños', 'created_at' => $now, 'updated_at' => $now ),
			array( 'nombre' => 'Deportes', 'created_at' => $now, 'updated_at' => $now ),
			array( 'nombre' => 'Diseño', 'created_at' => $now, 'updated_at' => $now ),
			array( 'nombre' => 'Economía, Banca, Finanzas y Seguros', 'created_at' => $now, 'updated_at' => $now ),
			array( 'nombre' => 'Educación', 'created_at' => $now, 'updated_at' => $now ),
			array( 'nombre' => 'Electricistas y similares', 'created_at' => $now, 'updated_at' => $now ),
			array( 'nombre' => 'Electrónica y Telecomunicaciones', 'created_at' => $now, 'updated_at' => $now ),
			array( 'nombre' => 'Fotógrafos', 'created_at' => $now, 'updated_at' => $now ),
			array( 'nombre' => 'Hotelería, Viajes y Turismo', 'created_at' => $now, 'updated_at' => $now ),
			array( 'nombre' => 'Idiomas', 'created_at' => $now, 'updated_at' => $now ),
			array( 'nombre' => 'Informática y Sistemas', 'created_at' => $now, 'updated_at' => $now ),
			array( 'nombre' => 'Internet y Comercio Electrónico', 'created_at' => $now, 'updated_at' => $now ),
			array( 'nombre' => 'Investigación y Desarrollo', 'created_at' => $now, 'updated_at' => $now ),
			array( 'nombre' => 'Jardineros', 'created_at' => $now, 'updated_at' => $now ),
			array( 'nombre' => 'Legal', 'created_at' => $now, 'updated_at' => $now ),
			array( 'nombre' => 'Limpieza, lavado y planchado', 'created_at' => $now, 'updated_at' => $now ),
			array( 'nombre' => 'Logística, Distribución y Almacenamiento', 'created_at' => $now, 'updated_at' => $now ),
			array( 'nombre' => 'Mecánicos y Latoneros', 'created_at' => $now, 'updated_at' => $now ),
			array( 'nombre' => 'Mensajeros y Motorizados', 'created_at' => $now, 'updated_at' => $now ),
			array( 'nombre' => 'Mercadeo y Publicidad', 'created_at' => $now, 'updated_at' => $now ),
			array( 'nombre' => 'Meseros(as) y Bartender', 'created_at' => $now, 'updated_at' => $now ),
			array( 'nombre' => 'Organización y Métodos', 'created_at' => $now, 'updated_at' => $now ),
			array( 'nombre' => 'Otros empleos', 'created_at' => $now, 'updated_at' => $now ),
			array( 'nombre' => 'Otros estudiantes', 'created_at' => $now, 'updated_at' => $now ),
			array( 'nombre' => 'Otros profesionales', 'created_at' => $now, 'updated_at' => $now ),
			array( 'nombre' => 'Pasantes, Practicantes o Becarios', 'created_at' => $now, 'updated_at' => $now ),
			array( 'nombre' => 'Petróleo, Minería y Gas', 'created_at' => $now, 'updated_at' => $now ),
			array( 'nombre' => 'Pintores', 'created_at' => $now, 'updated_at' => $now ),
			array( 'nombre' => 'Plomeros', 'created_at' => $now, 'updated_at' => $now ),
			array( 'nombre' => 'Producción, Operaciones y Mantenimiento', 'created_at' => $now, 'updated_at' => $now ),
			array( 'nombre' => 'Promotores y Modelos', 'created_at' => $now, 'updated_at' => $now ),
			array( 'nombre' => 'Recursos Humanos', 'created_at' => $now, 'updated_at' => $now ),
			array( 'nombre' => 'Salud', 'created_at' => $now, 'updated_at' => $now ),
			array( 'nombre' => 'Secretarias, Cajeros y Oficinistas', 'created_at' => $now, 'updated_at' => $now ),
			array( 'nombre' => 'Seguridad Industrial y Medio Ambiente', 'created_at' => $now, 'updated_at' => $now ),
			array( 'nombre' => 'Soldadores, herreros y torneros', 'created_at' => $now, 'updated_at' => $now ),
			array( 'nombre' => 'Ventas', 'created_at' => $now, 'updated_at' => $now ),
			array( 'nombre' => 'Vigilancia y Escolta', 'created_at' => $now, 'updated_at' => $now )
		);

		// Uncomment the below to run the seeder
		DB::table('profesiones')->insert($profesiones);
	}

}
