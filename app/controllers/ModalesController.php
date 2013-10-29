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

	public function registro( $email, $nombre )
	{
		return View::make('modales.modal_registro')->with( 'nombre', $nombre )->with('email', $email );
	}

	public function recargadigitelconfirmar( $monto, $numero_afiliado, $metodo_pago )
	{
		$test = file_get_contents('http://digitel.transamovil.com/recargar.jsp?telefono=04121000750&paymentMode=EF&monto=50&password=transa');
		$respuesta = json_decode( $test ); 

		return View::make('modales.modal_recarga')->with('monto', $monto )->with('numero_afiliado', $numero_afiliado )->with('metodo_pago', $metodo_pago )->with('respuesta', $respuesta);
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