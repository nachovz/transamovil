<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<link rel="stylesheet" type="text/css" href="{{asset('css/ventanas-modales.css')}}">
	</head>
	<body>
		<div class="modal_transaccion_exitosa_titulo_wrapper">
			<span class="modal_transaccion_exitosa_titulo">TRANSACCIÓN EXITOSA</span>
		</div>
		<div class="modal_transaccion_exitosa_datos_wrapper">
			<div class="modal_transaccion_exitosa_datos">
				<span class="modal_transaccion_exitosa_contenido">MONTO RECARGADO:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$monto}}</span><br>
				<span class="modal_transaccion_exitosa_contenido">NÚMERO RECARGADO:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$numero_afiliado}}</span><br>
				<span class="modal_transaccion_exitosa_contenido">FECHA DE LA RECARGA:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{date("j/n/Y")}}</span><br>
				<span class="modal_transaccion_exitosa_contenido">HORA DE LA RECARGA:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{date("g:i:s a")}}</span><br>
				<span class="modal_transaccion_exitosa_contenido">MÉTODO DE PAGO:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$metodo_pago}}</span><br>
				<span class="modal_transaccion_exitosa_contenido">N° CONFIRMACIÓN TRANSAMÓVIL:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4567686</span><br>
				<span class="modal_transaccion_exitosa_contenido">N° CONFIRMACIÓN DIGITEL:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0566009</span>
			</div>
		</div>
		<div class="modal_transaccion_exitosa_texto1_wrapper">
			<span class="transaccion_exitosa_texto_1">Para mayor información llame al 121 desde su Digitel o 0412 9121121</span>
		</div>
		<!--<div class="modal_transaccion_exitosa_check">
			<input type="checkbox"><span class="transaccion_exitosa_texto_1 check">Desea guardar en su lista de números afiliados:</span>
		</div>-->
	</body>
</html>