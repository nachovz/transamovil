<?php

class ModalesController extends BaseController
{
	public function afiliaciondigitelconfirmar( $numero, $alias, $prefijo )
	{
		$user 			= Auth::user();
		$afiliacion = Afiliacion::where( 'usuario_id', '=', $user->id )->where( 'servicio_id', '=', 1 )->where( 'numero', '=', $prefijo . $numero )->get()->first();


		if( ! $afiliacion )
		{
			$afiliacion 					= new Afiliacion();
			$afiliacion->servicio_id		= 1;
			$afiliacion->numero 			= $prefijo . $numero;
			$afiliacion->alias				= $alias;
			$user->afiliaciones()->save( $afiliacion );
		}

		return View::make('modales.modal_afiliacion')->with( 'numero', $numero )->with('alias', $alias)->with('prefijo', $prefijo);
	}

	public function registro( $email, $nombre )
	{
		return View::make('modales.modal_registro')->with( 'nombre', $nombre )->with('email', $email );
	}

	public function recargadigitelconfirmar( $monto )
	{
		$respuesta = file_get_contents('http://digitel.transamovil.com/recargar.jsp?telefono=04121000750&paymentMode=EF&monto=50&password=transa');
		$respuesta = json_decode( $respuesta );

		return View::make('modales.modal_recarga')->with('monto', $monto )->with('respuesta', $respuesta);
	}
}