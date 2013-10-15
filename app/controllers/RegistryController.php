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
		$header = View::make( 'components.header' , array( 'title' => "TransaMóvil" ));
		$footer = View::make( 'components.footer' );
		return View::make( 'registro2' , array( 'header' => $header , 'footer' => $footer ));
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