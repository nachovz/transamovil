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
			<span class="modal_afiliacion_titulo">MODIFICAR AFILIACION</span>
		</div>
		<div class="modal_afiliacion_texto_wrapper">
			{{Form::open( array('url' => '/modal/afiliacionDigitelModificar', 'method' => 'post') )}}
			
			<span class="modal_afiliacion_texto_1">
			{{Form::label('numero') . '<br>' . Form::text('numero', $afiliacion->numero)}}
			</span>
			<br>
			<span class="modal_afiliacion_texto_1">
			{{Form::label('alias') . '<br>' . Form::text('alias', $afiliacion->alias)}}
			</span>
			<br>
			{{Form::hidden('afiliacion_id', $afiliacion->id)}}
			{{Form::submit('Modificar') . Form::close()}}
		</div>
	</body>
</html>