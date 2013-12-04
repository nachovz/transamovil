<?php

class RegistryController extends BaseController {

	public function registro()
	{
		$estados = Estado::all()->lists('nombre', 'id');
		$municipios = Municipio::all()->lists('nombre', 'id');
		$ciudades = Ciudad::all()->lists('nombre', 'id');

		$header = View::make( 'components.header_registro' , array( 'title' => "TransaMóvil" ));
		$footer = View::make( 'components.footer_registro' );

		return View::make(
			'registro',
			array(
				'header' => $header,
				'footer' => $footer,
				'estados' => $estados,
				'municipios' => $municipios,
				'ciudades' => $ciudades
			)
		);
	}

	public function registro_final()
	{
		// Crear reglas de validacion del formulario
		$rules = array(
			'mail'                     => 'required|email|unique:usuarios,email',
			'mail_check'               => 'required|email|same:mail',
			'password'                 => 'required|confirmed',
			'pregunta_seguridad'       => 'required|integer',
			'respuesta_seguridad'      => 'required',
			'computadora_confianza'    => 'required',
			'prefijo_celular'          => 'required|in:0412,0414,0424,0416,0426',
			'celular'                  => 'required',
			'maila'                    => 'required|email|different:mail',

			'prefijo_ced_pas'          => 'required|in:V,E,J,P',
			'ced_pas'                  => 'required',
			'nombre'                   => 'required',
			'apellido'                 => 'required',
			'nacimiento'               => 'required|date',
			'sexo'                     => 'required|in:masculino,femenino',
			'registro-terminos-check'  => 'accepted',
			'pais'                     => 'required',
			'estado'                   => 'required|exists:estados,id',
			'municipio'                => 'required|exists:municipios,id',
			'ciudad'                   => 'required|exists:ciudades,id',
			'direccion'                => 'required',
			'tlf_habitacion'           => 'required',
			'tlf_oficina'              => 'required',

			'profesion'               => 'required|exists:profesiones,id',
			'campo_laboral'           => 'required|exists:campos_laborales,id',
			'nivel_educativo'         => 'required|in:Primaria,Secundaria,TSU,Universitario',
			'estado_civil'            => 'required|in:Soltero,Casado,Viudo,Divorciado',
			'banco_principal'         => 'required|exists:bancos,id',
		);

		$validator = Validator::make( Input::all(), $rules );

		if ( $validator->passes() )
		{
			$user 								= new User();
			$user->username						= Input::get('mail');
			$user->email						= Input::get('mail');
			$user->password 					= Hash::make( Input::get('password') );
			$user->pregunta_seguridad			= Input::get('pregunta_seguridad');
			$user->respuesta_seguridad			= Input::get('respuesta_seguridad');

			$confianza                          = new Computadora();
			$confianza->user_agent              = $_SERVER['HTTP_USER_AGENT'];
			$confianza->token                   = '';
			$confianza->ip_address              = $_SERVER['REMOTE_ADDR'];
			$confianza->nombre                  = Input::get('computadora_confianza');

			$celular                            = new Usuario_telefono();
			$celular->tipo                      = 'Celular';
			$celular->prefijo                   = Input::get('prefijo_celular');
			$celular->numero                    = Input::get('celular');

			$user->emaila						= Input::get('maila');

			if ( Input::get('prefijo_ced_pas') == 'V')
				$user->tipo_documento           = 'Cédula';
			elseif ( Input::get('prefijo_ced_pas') == 'P')
				$user->tipo_documento           = 'Pasaporte';
			elseif ( Input::get('prefijo_ced_pas') == 'E')
				$user->tipo_documento           = 'Extranjero';
			elseif ( Input::get('prefijo_ced_pas') == 'J')
				$user->tipo_documento           = 'Juridico';

			$user->nro_documento				= Input::get('ced_pas');
			$user->nombre 						= Input::get('nombre');
			$user->apellido 					= Input::get('apellido');
			$user->fecha_nacimiento				= Input::get('nacimiento');

			if ( Input::get('sexo') == 'masculino')
				$user->sexo                     = 'm';
			else
				$user->sexo                     = 'f';

			$direccion                          = new Usuario_direccion();
			$direccion->tipo                    = 'Principal';
			$direccion->pais                    = Input::get('pais');
			$direccion->estado                  = Input::get('estado');
			$direccion->municipio               = Input::get('municipio');
			$direccion->ciudad                  = Input::get('ciudad');
			$direccion->direccion               = Input::get('direccion');

			$habitacion                         = new Usuario_telefono();
			$habitacion->tipo                   = 'Casa';
			$habitacion->numero                 = Input::get('tlf_habitacion');

			$oficina                            = new Usuario_telefono();
			$oficina->tipo                      = 'Oficina';
			$oficina->numero                    = Input::get('tlf_oficina');

			$user->transapin					= '123456';


			$user->campo_laboral_id				= Input::get('campo_laboral');
			$user->profesion_id					= Input::get('profesion');
			$user->nivel_educativo				= Input::get('nivel_educativo');
			$user->ingreso_mensual				= Input::get('ingreso_mensual');
			$user->estado_civil					= Input::get('estado_civil');
			$user->banco_default_id				= Input::get('banco_principal');

			// Intentamos guardar el usuario
			try
			{	
				$user->save();
				$user->direcciones()->save($direccion);
				$user->telefonos()->save($celular);
				$user->telefonos()->save($habitacion);
				$user->telefonos()->save($oficina);

				$computadora = Computadora::where( 'usuario_id', '=', $user->id)->where( 'ip_address', '=', $confianza->ip_address)->get()->first();

				if ( $computadora == null )
					$user->computadoras()->save($confianza);

			}
			catch ( Exception $e )
			{
				// Si hay algun error en el guardado
				Log::error($e);

				return Redirect::route('registro')
					->with( 'message', 'Se produjo un error por favor intenta de nuevo' )
					->withInput();
			}
			
			// Si logramos autenticar correctamente
			Auth::login( $user );

			// Redireccionar al perfil del usuario
			return Redirect::route('home');
		}
		else
		{
			// Redirecciona hacia el home, incluyendo mensajes de error del validador
			return Redirect::route('registro')
				->with( 'error', 'Se produjo un error por favor intenta de nuevo' )
				->withErrors( $validator )
				->withInput();
		}
	}

}