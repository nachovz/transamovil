<?php

class RegistryController extends BaseController {

	public function registro()
	{
		$header = View::make( 'components.header' , array( 'title' => "TransaMóvil" ));
		$footer = View::make( 'components.footer' );
		return View::make( 'registro' , array( 'header' => $header , 'footer' => $footer ));
	}

	public function registro2()
	{
		//Armar reglas de validación
		$rules = array(
				'usuario' => 'required|unique:usuarios,username',
				'password' => 'required|min:8',
				'password_check' => 'required|same:password',
				'pregunta_seguridad' => 'required',
				'respuesta_seguridad' => 'required',
				'prefijo_celular' => 'required|numeric',
				'celular' => 'required|numeric',
				'mail' => 'required|email|unique:usuarios,email'
			);
		//Crear validador
		$validator = Validator::make( Input::all(), $rules );

		//Si el formulario valida
		if( ! $validator->fails() )
		{
			//Guardar datos en sesión
			$form_registro 												= array();			
			$form_registro['usuario']							= Input::get('usuario');
			$form_registro['password']						= Input::get('password');
			$form_registro['pregunta_seguridad']	= Input::get('pregunta_seguridad');
			$form_registro['respuesta_seguridad']	= Input::get('respuesta_seguridad');
			$form_registro['prefijo_celular']			= Input::get('prefijo_celular');
			$form_registro['celular']							= Input::get('celular');
			$form_registro['mail']								= Input::get('mail');
			Session::put( 'form_registro', $form_array );

			//Cargar vista	
			$header = View::make( 'components.header' , array( 'title' => "TransaMóvil" ));
			$footer = View::make( 'components.footer' );
			return View::make( 'registro2' , array( 'header' => $header , 'footer' => $footer ));
		}
		else
		{
			//Redireccionar a la  sección anterior, con datos de error e input
			return Redirect::route('registro')->withInput()->withErrors($validator);
		}
	}

	public function registro3()
	{
		$header = View::make( 'components.header' , array( 'title' => "TransaMóvil" ));
		$footer = View::make( 'components.footer' );
		return View::make( 'registro3' , array( 'header' => $header , 'footer' => $footer ));
	}

	public function registro_final()
	{
		
	}

}