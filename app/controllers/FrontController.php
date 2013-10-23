<?php

class FrontController extends BaseController {

	public function index()
	{
		$header = View::make( 'components.header' , array( 'title' => "TransaMóvil" ));
		$footer = View::make( 'components.footer' );
		$view_data 	= array();
		$view_data['message'] =  Session::get('message');

		return View::make( 'index' , array( 'header' => $header , 'footer' => $footer, 'view_data' => $view_data ));
	}

	public function comofunciona()
	{
		$header = View::make( 'components.header' , array( 'title' => "TransaMóvil" ));
		$footer = View::make( 'components.footer' );
		return View::make( 'comofunciona' , array( 'header' => $header , 'footer' => $footer ));
	}

	public function contactanos()
	{
		$header = View::make( 'components.header' , array( 'title' => "TransaMóvil" ));
		$footer = View::make( 'components.footer' );
		return View::make( 'contactanos' , array( 'header' => $header , 'footer' => $footer ));
	}

	public function empresaventajas()
	{
		$header = View::make( 'components.header' , array( 'title' => "TransaMóvil" ));
		$footer = View::make( 'components.footer' );
		return View::make( 'empresaventajas' , array( 'header' => $header , 'footer' => $footer ));
	}

	public function hagamosnegocio()
	{
		$header = View::make( 'components.header' , array( 'title' => "TransaMóvil" ));
		$footer = View::make( 'components.footer' );
		return View::make( 'hagamosnegocio' , array( 'header' => $header , 'footer' => $footer ));
	}

	public function nuestrassoluciones()
	{
		$header = View::make( 'components.header' , array( 'title' => "TransaMóvil" ));
		$footer = View::make( 'components.footer' );
		return View::make( 'nuestrassoluciones' , array( 'header' => $header , 'footer' => $footer ));
	}

	public function parativentajas()
	{
		$header = View::make( 'components.header' , array( 'title' => "TransaMóvil" ));
		$footer = View::make( 'components.footer' );
		return View::make( 'parativentajas' , array( 'header' => $header , 'footer' => $footer ));
	}

	public function preguntas()
	{
		$header = View::make( 'components.header' , array( 'title' => "TransaMóvil" ));
		$footer = View::make( 'components.footer' );
		return View::make( 'preguntas' , array( 'header' => $header , 'footer' => $footer ));
	}

	public function quienessomos()
	{
		$header = View::make( 'components.header' , array( 'title' => "TransaMóvil" ));
		$footer = View::make( 'components.footer' );
		return View::make( 'quienessomos' , array( 'header' => $header , 'footer' => $footer ));
	}

	public function recarga()
	{
		$header = View::make( 'components.header' , array( 'title' => "TransaMóvil" ));
		$footer = View::make( 'components.footer' );
		return View::make( 'recarga' , array( 'header' => $header , 'footer' => $footer ));
	}

	public function solucionesadaptables()
	{
		$header = View::make( 'components.header' , array( 'title' => "TransaMóvil" ));
		$footer = View::make( 'components.footer' );
		return View::make( 'solucionesadaptables' , array( 'header' => $header , 'footer' => $footer ));
	}

	public function transamovil()
	{
		$header = View::make( 'components.header' , array( 'title' => "TransaMóvil" ));
		$footer = View::make( 'components.footer' );
		return View::make( 'transamovil' , array( 'header' => $header , 'footer' => $footer ));
	}
	
}