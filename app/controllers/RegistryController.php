<?php

class RegistryController extends BaseController {

	public function registro()
	{
		$header = View::make( 'components.header' , array( 'title' => "TransaMóvil" ));
		$footer = View::make( 'components.footer' );
		return View::make( 'registro' , array( 'header' => $header , 'footer' => $footer ));
	}

	public function registro_final()
	{
		$user 										= new User();
		$user->username						= Input::get('usuario');
		$user->email							= Input::get('mail');
		$user->nombre 						= Input::get('nombre');
		$user->apellido 					= Input::get('apellido');
		$user->password 					= Hash::make( Input::get('password') );
		$user->banco_default_id		= 1;
		$user->campo_laboral_id		= 1;
		$user->profesion_id				= 1;

		$user->save();

		Auth::login($user);

		return Redirect::route('home');
	}

}