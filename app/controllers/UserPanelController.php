<?php

class UserPanelController extends BaseController {

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

