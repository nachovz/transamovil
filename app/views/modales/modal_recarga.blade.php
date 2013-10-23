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
				<table>
					<tr>
						<td>
							<span class="modal_transaccion_exitosa_contenido">MONTO RECARGADO:</span>
						</td>
						<td style ="text-align:right">
							<span class="modal_transaccion_exitosa_contenido2">{{$monto}} BsF.</span>
						</td>
					</tr>
					<tr>
						<td>
							<span class="modal_transaccion_exitosa_contenido">NÚMERO RECARGADO:</span>
						</td>
						<td style ="text-align:right">
							<span class="modal_transaccion_exitosa_contenido2">{{$numero_afiliado}}</span>
						</td>
					</tr>
					<tr>
						<td>
							<span class="modal_transaccion_exitosa_contenido">FECHA DE LA RECARGA:</span>
						</td>
						<td style ="text-align:right">
							<span class="modal_transaccion_exitosa_contenido2">{{date("j/n/Y")}}</span>
						</td>
					</tr>
					<tr>
						<td>
							<span class="modal_transaccion_exitosa_contenido">HORA DE LA RECARGA:</span>
						</td>
						<td style ="text-align:right">
							<span class="modal_transaccion_exitosa_contenido2">{{date("g:i:s a")}}</span>
						</td>
					</tr>
					<tr>
						<td>
							<span class="modal_transaccion_exitosa_contenido">MÉTODO DE PAGO:</span>
						</td>
						<td style ="text-align:right">
							<span class="modal_transaccion_exitosa_contenido2">{{$metodo_pago}}</span>
						</td>
					</tr>
					<tr>
						<td>
							<span class="modal_transaccion_exitosa_contenido">N° CONFIRMACIÓN TRANSAMÓVIL:</span>
						</td>
						<td style ="text-align:right">
							<span class="modal_transaccion_exitosa_contenido2">4567686</span>
						</td>
					</tr>
					<tr>
						<td>
							<span class="modal_transaccion_exitosa_contenido">N° CONFIRMACIÓN DIGITEL:</span>
						</td>
						<td style ="text-align:right">
							<span class="modal_transaccion_exitosa_contenido2">0566009</span>
						</td>
					</tr>
				</table>
			</div>
		</div>
		<div class="modal_transaccion_exitosa_texto1_wrapper">
			<span class="transaccion_exitosa_texto_1">Para mayor información llame al 121 desde su Digitel o 0412 9121121</span>
		</div>
		<div class="modal_transaccion_exitosa_check">
			<input type="checkbox"><span class="transaccion_exitosa_texto_1 check">Desea guardar en su lista de números afiliados:</span>
		</div>
	</body>
</html>