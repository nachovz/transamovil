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
		$user 							= new User();
		$user->username			= Input::get('usuario');
		$user->email				= Input::get('mail');
		$user->nombre 			= Input::get('nombre');
		$user->apellido 		= Input::get('apellido');
		$user->password 		= Hass::make( Input::get('password') );

		$user->save();

		Auth::login($user);

		return Redirect::route('home');
	}

}