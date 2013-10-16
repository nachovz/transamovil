<?php

class ModalesController extends BaseController
{
	public function afiliaciondigitelconfirmar( $numero, $alias )
	{
		$user 			= Auth::user();
		$afiliacion = Afiliacion::where( 'usuario_id', '=', $user->id )->where( 'servicio_id', '=', 1 )->where( 'numero', '=', '0412' . $numero )->get()->first();


		if( ! $afiliacion )
		{
			$afiliacion 							= new Afiliacion();
			$afiliacion->servicio_id	= 1;
			$afiliacion->numero 			= '0412' . $numero;
			$afiliacion->alias				= $alias;
			$user->afiliaciones()->save( $afiliacion );
		}

		return View::make('modales.modal_afiliacion')->with( 'numero', $numero );
	}
}