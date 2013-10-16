{{$header}}

<div id="container_reg">
<div id="container3">
<div id="container_home4">
	<div id="mis_servicios_2"></div>
	<div id="volver_home"><a href="{{URL::route( 'home' )}}"><img src="img/volver_home.png"></a></div>
	<div class="servicio_texto_1">POR FAVOR INGRESA LOS DATOS</div>
	<div class="logo_digitel" style="top:16px"></div>
	<div class="afiliacion_3" style="top:114px">
		<table id="tabla_5">
			<tr>
				<td>SERVICIO:</td>
			</tr>
			<tr>
				<td style="background-color:rgb(0,137,150);">NÚMERO:</td>
			</tr>
			</tr>
				<td>MONTO:</td>
			</tr>
			<tr>
				<td style="background-color:rgb(0,137,150);">MÉTODO DE PAGO:</td>
			</tr>
		</table>		
	</div>
	<div class="afiliacion_9" style="top: 114px;">
		<table id="tabla_6">
			<tr>
				<td>DIGITEL PRE-PAGO</td>
			</tr>
			<tr>
				<td style="background-color:rgb(255,255,255);">0412-3454545 - Mamá</td>
			</tr>
			</tr>
				<td>20,00</td>
			</tr>
			<tr>
				<td style="background-color:rgb(255,255,255);">Nueva tarjeta de Crédito</td>
			</tr>
		</table>
	</div>
	<div class="afiliacion_3" style="top:234px">
		<table id="tabla_5">
			<tr>
				<td>TIPO DE TARJETA DE CREDITO:</td>
			</tr>
			<tr>
				<td style="background-color:rgb(0,137,150);">NÚMERO DE TARJETA</td>
			</tr>
			</tr>
				<td>CÓDIGO DE SEGURIDAD:</td>
			</tr>
			<tr>
				<td style="background-color:rgb(0,137,150);">FECHA DE VENCIMIENTO:</td>
			</tr>
			</tr>
				<td>BANCO EMISOR:</td>
			</tr>
			<tr>
				<td style="background-color:rgb(0,137,150);">NOMBRE IMPRESO EN LA TARJETA:</td>
			</tr>
			</tr>
				<td>CEDULA O PASAPORTE:</td>
			</tr>
			<tr>
				<td style="background-color:rgb(0,137,150);">MONTO DEL CARGO ALEATORIO:</td>
			</tr>
		</table>		
	</div>
	<div class="afiliacion_9" style="top: 234px;">
		<table id="tabla_6">
			<tr>
				<td>DIGITEL PRE-PAGO</td>
			</tr>
			<tr>
				<td style="background-color:rgb(255,255,255);">****-****-****-2345</td>
			</tr>
			</tr>
				<td>***</td>
			</tr>
			<tr>
				<td style="background-color:rgb(255,255,255);">01/2018</td>
			</tr>
			</tr>
				<td>Banco Azul</td>
			</tr>
			<tr>
				<td style="background-color:rgb(255,255,255);">Andrea Reyes</td>
			</tr>
			</tr>
				<td>V-22.035.112</td>
			</tr>
		</table>
	</div>
	<div id="num_tdc_2">
		{{Form::text( 'numero_tarjeta', null, array('id' => 'campo_registro_10') )}}
	</div>
	<div id="check2">
		{{Form::checkbox('name', 'value', true)}}<span class="radio_check">Establecer como predeterminada</span>&nbsp;&nbsp;&nbsp;
		{{Form::checkbox('name', 'value')}}<span class="radio_check">Afiliar</span>
	</div>
	<div class="terms"></div>	
	<div class="buttons_6">
		<a href="modales/modal_transaccion_exitosa.html" class="clsVentanaIFrame3"><img src="img/continuar.png" class="img_space"></a>
		<a href="{{URL::route( 'home2' )}}"><img src="img/cancelar_2.png"></a>
	</div>
	<script type="text/javascript" src="js/ext/jquery-1.7.2.min.js"></script>
	<script type="text/javascript" src="js/ventanas-modales.js"></script>
</div><!--container_home-->
</div><!--container3-->
</div><!--container_reg-->

{{$footer}}