<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<link rel="stylesheet" type="text/css" href="{{asset('css/ventanas-modales.css')}}">
		<style>
			.modal_afiliacion_texto_wrapper input[type="submit"]{ 
				width: 62px;
				height: 18px;
				background: transparent url('{{asset('img/siguiente.png')}}') no-repeat left top;
				border: none;
				color: transparent;
				display: block;
			}
		</style>
	</head>
	<body>
		<div class="modal_afiliacion_titulo_wrapper">
			<span class="modal_afiliacion_titulo">AFILIACIÓN ELIMINADA</span>
		</div>
		<div class="modal_afiliacion_texto_wrapper" style="text-align:center">			
			<span class="modal_afiliacion_texto_1">SE HA ELIMINADO EXITOSAMENTE LA AFILIACIÓN DEL NÚMERO {{$afiliacion->numero}}</span>
		</div>
	</body>
</html>