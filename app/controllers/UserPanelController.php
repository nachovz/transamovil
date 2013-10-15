<?php

class UserPanelController extends BaseController {

	public function login()
	{
		//Crear reglas de validacion de formulario. Mail/Clave requerido
		$validator = Validator::make(Input::all(), array('email' => 'required','password' => 'required'));

		//Si el formulario valida
		if(!$validator->fails())
		{

			//Autenticar al usuario según el campo email
			$auth = array('email' => Input::get('email'), 'password' => Input::get('password'));

			//Si logramos autenticar correctamente
			if( Auth::attempt( $auth ) )
			{
				//Redireccionar al perfil del usuario
				return Redirect::route('home2', Auth::user()->id );
			}
			else
			{
				//Redireccionar al home
				return Redirect::to('/')->withInput();
			}
		}
		else
		{
			//Redireccionar hacia el home, incluyendo mensajes de error de validador
			return Redirect::to('/')->withInput();
		}
	}

	public function home()
	{
		$header = View::make( 'components.header_registro' , array( 'title' => "TransaMóvil" ));
		$footer = View::make( 'components.footer' );
		return View::make( 'home' , array( 'header' => $header , 'footer' => $footer ));
	}

	public function home2() //Si ya afilió el servicio de Digitel
	{
		$header = View::make( 'components.header_registro' , array( 'title' => "TransaMóvil" ));
		$footer = View::make( 'components.footer' );
		return View::make( 'home2' , array( 'header' => $header , 'footer' => $footer ));
	}

	public function misservicios()
	{
		$header = View::make( 'components.header_registro' , array( 'title' => "TransaMóvil" ));
		$footer = View::make( 'components.footer' );
		return View::make( 'misservicios' , array( 'header' => $header , 'footer' => $footer ));
	}

	public function misservicios2() //Si ya tiene servicios afiliados
	{
		$header = View::make( 'components.header_registro' , array( 'title' => "TransaMóvil" ));
		$footer = View::make( 'components.footer' );
		return View::make( 'misservicios2' , array( 'header' => $header , 'footer' => $footer ));
	}

	public function afiliaciondigitel()
	{
		$header = View::make( 'components.header_registro' , array( 'title' => "TransaMóvil" ));
		$footer = View::make( 'components.footer' );
		return View::make( 'afiliaciondigitel' , array( 'header' => $header , 'footer' => $footer ));
	}

	public function afiliaciondigitelconfirmar()
	{
		$header = View::make( 'components.header_registro' , array( 'title' => "TransaMóvil" ));
		$footer = View::make( 'components.footer' );
		return View::make( 'afiliaciondigitelconfirmar' , array( 'header' => $header , 'footer' => $footer ));
	}

	public function digitelrecarga()
	{
		$header = View::make( 'components.header_registro' , array( 'title' => "TransaMóvil" ));
		$footer = View::make( 'components.footer' );
		return View::make( 'digitelrecarga' , array( 'header' => $header , 'footer' => $footer ));
	}

	public function digitelrecargaconfirmar()
	{
		$header = View::make( 'components.header_registro' , array( 'title' => "TransaMóvil" ));
		$footer = View::make( 'components.footer' );
		return View::make( 'digitelrecargaconfirmar' , array( 'header' => $header , 'footer' => $footer ));
	}

}

