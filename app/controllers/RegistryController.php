<?php

class RegistryController extends BaseController {

	public function registro()
	{
		$header = View::make( 'components.header_registro' , array( 'title' => "TransaMóvil" ));
		$footer = View::make( 'components.footer_registro' );
		return View::make( 'registro' , array( 'header' => $header , 'footer' => $footer ));
	}

	public function registro_final()
	{
		$user 										= new User();
		$user->username						= Input::get('usuario');
		$user->email							= Input::get('mail');
		$user->nombre 						= Input::get('nombre');
		$user->apellido 					= Input::get('apellido');
		$user->password 					= Hash::make( '12345' );
		$user->banco_default_id		= 1;
		$user->campo_laboral_id		= 1;
		$user->profesion_id				= 1;
		$user->fecha_nacimiento		= date('Y-m-d');
		$user->nivel_educativo		= 'Universitario';
		$user->ingreso_mensual		= 30000;
		$user->estado_civil				= 'Soltero';
		$user->banco_default_id		= 1;
		$user->tipo_documento			= 'Cédula';
		$user->nro_documento			= '14395206';
		$user->pregunta_seguridad	= Input::get('pregunta_seguridad');
		$user->respuesta_seguridad= 'Ola k ase?';		

		$user->save();

		Auth::login($user);

		return Redirect::route('home');
	}

}