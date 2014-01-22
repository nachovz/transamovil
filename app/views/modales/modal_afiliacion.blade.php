<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<link rel="stylesheet" type="text/css" href="{{asset('css/ventanas-modales.css')}}">
	</head>
	<body>
		<div class="modal_afiliacion_titulo_wrapper">
			<span class="modal_afiliacion_titulo">AFILIACIÓN EXITOSA</span>
		</div>
		<div class="modal_afiliacion_texto_wrapper">
			<span class="modal_afiliacion_texto_1">LA AFILIACIÓN DEL NÚMERO DIGITEL {{$prefijo}}-{{$numero}} FUE EXITOSA.</span>
		</div>
        <!--[if IE 8]>
        <div style="text-align:center; margin-top:30px;"><a href="{{ URL::to('home2') }}" class="btn-close">{{ HTML::image('img/aceptar.png') }}</a></div>
        <![endif]-->
   </body>
</html>