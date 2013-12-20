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

	public function recargadigitelconfirmar( $monto, $numero_afiliado, $metodo_pago, $codigo, $numero_digitel )
	{		

        //str_replace('0412', '',$numero_digitel.$numero_afiliado)
		$prefijo = "";
		if ($numero_digitel != "000") {
			$prefijo = $numero_digitel;
		}
		$url = 'http://digitel.transamovil.com:8000/recargar.jsp?telefono=' . $prefijo.$numero_afiliado . '&paymentMode=EF&monto=' . $monto . '&password=' . Auth::user()->nombre;

		//echo $url;
		$stream_context	= stream_context_create( array('http' => array('timeout' => 2400.0)) );
		$fp							= @fopen($url, 'r', false, $stream_context);

        if($fp)
		{
			$meta	= stream_get_meta_data( $fp );
			$resp	= json_decode( stream_get_contents( $fp ) );			

            if($resp->codigo=='00'){
                $promocional= Promocional::where('codigo',$codigo)->first();
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
		return View::make('modales.modal_recarga')->with('monto', $monto )->with('numero_afiliado', $numero_afiliado )->with('metodo_pago', $metodo_pago )->with('resp', $resp)->with('meta', $meta )->with('prefijo', $prefijo);
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
}