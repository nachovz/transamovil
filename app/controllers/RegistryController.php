<?php

class RegistryController extends BaseController {

	public function registro()
	{
		$paises = Pais::all()->lists('nombre','id');

        $header = View::make( 'components.header_registro' , array( 'title' => "TransaMóvil" ));
		$footer = View::make( 'components.footer_registro' );

		return View::make(
			'registro',
			array(
				'header' => $header,
				'footer' => $footer,
                'paises' => $paises
			)
		);
	}

	public function registro_usuario()
	{
		// Crear reglas de validacion del formulario
		$rules = array(
			'mail'                     => 'required|email|unique:usuarios,email',
			'mail_check'               => 'required|email|same:mail',
			'password'                 => 'required|confirmed',
			'pregunta_seguridad'       => 'required|integer',
			'respuesta_seguridad'      => 'required',
			'prefijo_celular'          => 'required|in:0412,0414,0424,0416,0426',
			'celular'                  => 'required',
			'maila'                    => 'required|email|different:mail',

			'prefijo_ced_pas'          => 'required|in:V,E,J,P',
			'ced_pas'                  => 'required',
			'nombre'                   => 'required',
			'apellido'                 => 'required',
			'nacimiento'               => 'required|date_format:d/m/Y',
			'sexo'                     => 'required|in:masculino,femenino',
			'validacion'               => 'required|captcha',
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


                //TODO dejar este if mientras este inactiva la validación del computador
                if(Input::get('computadora_confianza')!=null){

                    $computadora = Computadora::where( 'usuario_id', '=', $user->id)->where( 'ip_address', '=', $confianza->ip_address)->get()->first();

                    if ( $computadora == null )
                        $user->computadoras()->save($confianza);

                }
			}
			catch ( Exception $e )
			{
				// Si hay algun error en el guardado
				Log::error($e);

				if (Request::ajax())
				{
				     return Response::json(
				     	array(
							'success' => false,
							'message' => 'Se produjo un error por favor intenta de nuevo'
						),
						400
					);
				}
				else
				{
					return Redirect::route('registro')
						->with( 'message', 'Se produjo un error por favor intenta de nuevo' )
						->withInput();
				}
			}
			
			// Si logramos autenticar correctamente
			Auth::login( $user );

			// Redireccionar al perfil del usuario
			if (Request::ajax())
			{
			     return Response::json(
			     	array(
						'success' => true,
						'message' => null,
						'result' => array(
							'email' => $user->email,
							'transapin' => $user->transapin
						)
					),
					200
			     );
			}
			else
				return Redirect::route('home');
		}
		else
		{
			if (Request::ajax())
			{
			     return Response::json(
			     	array(
						'success' => false,
						'message' => 'Se produjo un error por favor intenta de nuevo',
						'errors' => $validator->getMessageBag()->toArray()
					),
					400
			     );
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

    public function email(){
        $email = Input::get('email');

        if(User::where('email',$email)->first()!=null){
            $result = new stdClass;
            $result->status = "error";
            $result->status_code = "email_exist";

            $result->message="Ese email ya ha sido tomado.";
            return Response::json($result, 200);
        }else{
            $result = new stdClass;
            $result->status = "success";
            $result->status_code = "success_code";

            $result->message="";
            return Response::json($result, 200);
        }
    }

	public function registro_final()
	{
		return Redirect::route('home');
	}

    public function uploadImage(){

        $user = Auth::user();

        $type = Input::get('type');

        if(!Input::hasFile('image') || is_null($type)){
            $result = new stdClass;
            $result->status = "error";
            $result->status_code = "validation";

            $result->message="Imagen no cargada";

            return Response::json($result,400);
        }

        $fileName=strtolower('image_'.$type.'_'.$user->id.'.'.Input::file('image')->getClientOriginalExtension());

        Input::file('image')->move(public_path('img/user'),$fileName);


        $user->{'image_'.$type}=URL::to('img/user').'/'.$fileName;

        $user->save();


        $result = new stdClass;
        $result->status = "success";
        $result->image=URL::to('img/user').'/'.$fileName;
        $result->type=$type;

        return Response::json($result);
    }

}