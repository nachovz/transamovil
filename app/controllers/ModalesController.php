<?php

class ModalesController extends BaseController
{
	protected $servicio_id = 1;

    public function afiliaciondigitelconfirmar( $numero, $alias, $prefijo )
	{
		$user 			= Auth::user();
		$afiliacion 	= Afiliacion::where( 'usuario_id', '=', $user->id )->where( 'servicio_id', '=', 1 )->where( 'numero', '=', $prefijo . $numero )->get()->first();


		if( ! $afiliacion )
		{
			$afiliacion 								= new Afiliacion();
			$afiliacion->servicio_id		= $this->servicio_id;
			$afiliacion->numero 				= $prefijo . $numero;
			$afiliacion->alias					= $alias;
			
			$user->afiliaciones()->save( $afiliacion );
		}

		return View::make('modales.modal_afiliacion')->with( 'numero', $numero )->with('alias', $alias)->with('prefijo', $prefijo);
	}

	public function registro( $email )
	{
		$user = User::where('email', '=', $email)->get()->first();

		return View::make('modales.modal_registro')->with( 'transapin', $user->transapin )->with('email', $user->email );
	}

	public function recargadigitelconfirmar(){

        $validator=Validator::make(
            Input::all(),
            array(
                'monto'=>'required',
                'numero_afiliado'=>'required',
                'metodo_pago'=>'required',
                'codigo'=>'required',
                'numero_digitel'=>'required',
                'password_check'=>'required'
            )
        );

        $credentials=array(
            'username'=>Auth::user()->email,
            'password'=>Input::get('password_check')
        );

        if ($validator->fails() || !Auth::validate($credentials)){

            return Redirect::back()
                ->with(Input::all())
                ->withErrors($validator->errors());
        }


        //str_replace('0412', '',$numero_digitel.$numero_afiliado)
		$prefijo = "";
		if (Input::get('numero_digitel') != "000") {
			$prefijo = Input::get('numero_digitel');
		}
		$url = 'http://digitel.transamovil.com:8000/recargar.jsp?telefono=' . $prefijo.Input::get('numero_afiliado') . '&paymentMode=EF&monto=' . Input::get('monto') . '&password=' . Auth::user()->nombre;

		//echo $url;
		$stream_context	= stream_context_create( array('http' => array('timeout' => 2400.0)) );
		$fp							= @fopen($url, 'r', false, $stream_context);

        if($fp)
		{
			$meta	= stream_get_meta_data( $fp );
			$resp	= json_decode( stream_get_contents( $fp ) );			

            if($resp->codigo=='00'){
                $promocional= Promocional::where('codigo',Input::get('codigo'))->first();
                if(null!=$promocional){
                    $promocional->utilizado=1;
                    $promocional->save();
                }

            }
		}
		else
		{
			$meta = array('wrapper_data' => array('HTTP/1.1 408 Request Timeout'));
			$resp	= new StdClass();
			$resp->codigo = '21';
		}

        $header = View::make( 'components.header_panel' , array( 'title' => "TransaMóvil" ));
        $footer = View::make( 'components.footer_registro' );

		return View::make('modales.modal_recarga',array( 'header' => $header , 'footer' => $footer ))->with('monto', Input::get('monto') )->with('numero_afiliado', Input::get('numero_afiliado') )->with('metodo_pago', Input::get('metodo_pago') )->with('resp', $resp)->with('meta', $meta )->with('prefijo', $prefijo);
	}

	public function afiliacionDigitelModificacion( $afiliacion_id )
	{
		return View::make('modales.afiliacion_modificar_numero')->with('afiliacion', Afiliacion::find($afiliacion_id));
	}

	public function afiliacionDgitelModificar()
	{
		$afiliacion 					= Afiliacion::find(Input::get('afiliacion_id'));
		$afiliacion->numero		= Input::get('prefijo') . Input::get('numero');
		$afiliacion->alias		= Input::get('alias');

		try
		{
			$afiliacion->save();
		}
		catch( Exception $e )
		{

		}
		return View::make('modales.afiliacion_modificar_numero_confirmar');
	}

    public function afiliacionDigitelModificarIe()
    {
        $afiliacion 					= Afiliacion::find(Input::get('afiliacion_id'));
        $afiliacion->numero		= Input::get('prefijo') . Input::get('numero');
        $afiliacion->alias		= Input::get('alias');

        try
        {
            $afiliacion->save();
        }
        catch( Exception $e )
        {

        }
        return Redirect::to('afiliaciondigitel');
    }


	public function afiliacionDigitelCrear()
	{		
		$user 			= Auth::user();
		$afiliacion = $user->afiliaciones()->where( 'servicio_id', '=', $this->servicio_id )->where( 'numero', '=', Input::get('numero') )->get()->first();

		if( ! $afiliacion )
		{
			$afiliacion 								= new Afiliacion();
			$afiliacion->servicio_id		= $this->servicio_id;
			$afiliacion->numero 				= Input::get('numero');
			$afiliacion->alias					= Input::get('alias');
			
			$user->afiliaciones()->save( $afiliacion );
		}
		return View::make('modales.modal_afiliacion')->with('prefijo', '0412')->with('numero', str_replace('0412', '', Input::get('numero')));
	}

	public function afiliacionDigitelEliminar($afiliacion_id)
	{
		$afiliacion = Afiliacion::find($afiliacion_id);
		$output = View::make('modales.modal_afiliacion_eliminar')->with('afiliacion', $afiliacion);
		$afiliacion->delete();
		return $output;
	}

    public function afiliacionDigitelEliminarIe($afiliacion_id)
    {
        $afiliacion = Afiliacion::find($afiliacion_id);
        $afiliacion->delete();
        return Redirect::to('afiliaciondigitel');
    }
}