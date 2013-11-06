<?php

class UserPanelController extends BaseController {

	public function login()
	{
		//Crear reglas de validacion de formulario. Mail/Clave requerido
		$validator = Validator::make(Input::all(), array('email' => 'required','password' => 'required'));
		
		//Si el formulario valida
		if(! $validator->fails())
		{

			//Autenticar al usuario según el campo email
			$auth = array('email' => Input::get('email'), 'password' => Input::get('password'));

			//Si logramos autenticar correctamente
			if( Auth::attempt( $auth ) )
			{
				//Redireccionar al perfil del usuario
				return Redirect::route('home' );
			}
			else
			{
				Session::flash( 'message', 'El nombre de usuario y la contraseña no coinciden, por favor intenta de nuevo.' );
				//Redireccionar al home
				return Redirect::route('index', array('message' => "ERROR-IN"));//->withErrors($validator)->withInput();
			}
		}
		else
		{
			//Redireccionar hacia el home, incluyendo mensajes de error de validador
			//return Redirect::route('index')->withErrors($validator)->withInput();
			return Redirect::route('index', array('message' => "ERROR"));
		}
	}

	public function logout()
	{
		Auth::logout();
		return Redirect::route('index');
	}

	public function home()
	{
		$header = View::make( 'components.header_panel' , array( 'title' => "TransaMóvil" ));
		$footer = View::make( 'components.footer_registro' );
		return View::make( 'home2' , array( 'header' => $header , 'footer' => $footer ));
	}

	public function home2() //Si ya afilió el servicio de Digitel
	{
		$header = View::make( 'components.header_panel' , array( 'title' => "TransaMóvil" ));
		$footer = View::make( 'components.footer_registro' );
		return View::make( 'home2' , array( 'header' => $header , 'footer' => $footer ));
	}

	public function misservicios()
	{
		$header = View::make( 'components.header_panel' , array( 'title' => "TransaMóvil" ));
		$footer = View::make( 'components.footer_registro' );
		return View::make( 'misservicios' , array( 'header' => $header , 'footer' => $footer ));
	}

	public function misservicios2() //Si ya tiene servicios afiliados
	{
		$header = View::make( 'components.header_panel' , array( 'title' => "TransaMóvil" ));
		$footer = View::make( 'components.footer_registro' );
		return View::make( 'misservicios2' , array( 'header' => $header , 'footer' => $footer ));
	}

	public function afiliaciondigitel()
	{
		$header = View::make( 'components.header_panel' , array( 'title' => "TransaMóvil" ));
		$footer = View::make( 'components.footer_registro' );
		return View::make( 'afiliaciondigitel' , array( 'header' => $header , 'footer' => $footer ));
	}

	public function afiliaciondigitelconfirmar()
	{
		$header = View::make( 'components.header_panel' , array( 'title' => "TransaMóvil" ));
		$footer = View::make( 'components.footer_registro' );

		Session::flash('prefijo', Input::get('prefijo'));
		Session::flash('numero', Input::get('numero'));
		Session::flash('alias', Input::get('alias'));

		return View::make( 'afiliaciondigitelconfirmar' , array( 'header' => $header , 'footer' => $footer ));
	}

	public function digitelrecarga()
	{
		$header = View::make( 'components.header_panel' , array( 'title' => "TransaMóvil" ));
		$footer = View::make( 'components.footer_registro' );
		return View::make( 'digitelrecarga' , array( 'header' => $header , 'footer' => $footer ));
	}

	public function digitelrecargaconfirmar()
	{		
		if( Input::has('numero_digitel') )
		{
			Session::flash('numero_digitel', Input::get('numero_digitel'));	
		}
			Session::flash('numero_afiliado', Input::get('numero_afiliado'));
		
		
		Session::flash('monto', Input::get('monto'));
		//Session::flash('numero_digitel', Input::get('numero_digitel'));

		$header = View::make( 'components.header_panel' , array( 'title' => "TransaMóvil" ));
		$footer = View::make( 'components.footer_registro' );
		return View::make( 'digitelrecargaconfirmar' , array( 'header' => $header , 'footer' => $footer ));
	}
}
