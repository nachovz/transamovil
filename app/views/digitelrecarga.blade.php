{{$header}}
<?php 
	$user 		= Auth::user();
	$numerillo 	= Afiliacion::where( 'usuario_id', '=', $user->id )->get()->all(); 
?>

<div id="container_reg">
<div id="container3">
<div id="container_home4">
	<div id="mis_servicios_3"></div>
	<div id="volver_home"><a href="{{URL::route( 'home' )}}"><img src="img/volver_home.png"></a></div>
	<div class="servicio_texto_1">POR FAVOR INGRESA LOS DATOS</div>
	<div class="logo_digitel" style="top:26px"></div>
	<div class="afiliacion_3" style="top:114px">
		<table id="tabla_5">
			<tr>	
				<td>SERVICIO:</td>
			</tr>
			<tr>
				<td style="background-color:rgb(0,137,150);">NÚMERO DIGITEL<span id="ffs">(Móvil,Fijo o BAM):</span></td>
			</tr>
			</tr>
				<td>NÚMEROS AFILIADOS:</td>
			</tr>
			<tr>
				<td style="background-color:rgb(0,137,150);">MONTO BsF.</td>
			</tr>
			</tr>
				<td>MÉTODO DE PAGO:</td>
			</tr>
			<tr>
				<td style="background-color:rgb(0,137,150);">CÓDIGO PROMOCIONAL:</td>
			</tr>
		</table>		
	</div>
	<div id="aux_recarga">
		{{Form::open(array('method' => 'post', 'route' => 'digitelrecargaconfirmar'))}}
		{{Form::select('servicio', array('DIGITEL PRE-PAGO' => 'DIGITEL PRE-PAGO'), null, array('id' => 'campo_registro2'))}}<br>
		{{Form::select('numero_digitel', array('0412' => '0412')) . Form::text( 'celular', null, array('id' => 'campo_registro3') )}}<br>
		<select id="campo_registro2" name="numero_afiliado">
			@foreach ($numerillo as $numerillo)
			<option>{{$numerillo->numero}}</option>
			@endforeach
		</select><br>
		{{Form::text( 'monto', null, array('id' => 'campo_registro_a8', 'required', 'x-moz-errormessage' => 'Introduzca un monto', 'title' => 'Introduzca un monto') )}}<br>
		{{Form::select('metodo_pago', array('Código Promocional' => 'Código Promocional', 'Cuenta de Banco' => 'Cuenta de Banco', 'Tarjeta de Crédito' => 'Tarjeta de Crédito'), null, array('id' => 'campo_registro2'))}}<br>
		{{Form::text( 'codigo', null, array('id' => 'campo_registro8', 'required', 'x-moz-errormessage' => 'Introduzca el código', 'title' => 'Introduzca el código') )}}<br>
	</div>
	<!--<div class="afiliacion_3" style="top:255px">
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
		</table>		
	</div>
	<div id="aux_recarga2">
		{{Form::text( 'numero_tarjeta', null, array('id' => 'campo_registro') )}}<br>
		{{Form::text( 'monto', null, array('id' => 'campo_registro9') )}}<br>
		{{Form::select('mes', array('0' => 'MES')) . Form::select('fecha', array('0' => 'FECHA'))}}<br>
		{{Form::select('banco_emisor', array('0' => ''), null, array('id' => 'campo_registro2'))}}<br>
		{{Form::text( 'nombre_impreso', null, array('id' => 'campo_registro') )}}<br>
	</div>
	<div id="check2">
		{{Form::checkbox('name', 'value', true)}}<span class="radio_check">Establecer como predeterminada</span>&nbsp;&nbsp;&nbsp;
		{{Form::checkbox('name', 'value')}}<span class="radio_check">Afiliar</span>
	</div>
	<div id="tdc">
		{{Form::radio('1', 'Visa')}}<img src="img/visa.png" style="position:relative;top:3px">
		{{Form::radio('2', 'Mastercard')}}<img src="img/mastercard.png" style="position:relative;top:3px">
		{{Form::radio('3', 'Amex')}}<img src="img/amex.png" style="position:relative;top:3px">
	</div>			
	<div id="num_cedula">
		V-22.035.112
	</div>-->
	<div id="notif">
		"Introduzca el monto deseado desde Bs. 20 hasta<br>500 en múltiplos de 10, Ej : 20, 30, 40, …490, 500”
	</div>
	<!--<div class="terms"></div>-->
	<div class="buttons_6" style="top: 211px;">
		{{Form::submit('', array('id' => 'boton_continuar')) . Form::close()}}&nbsp;&nbsp;&nbsp;<a href="{{URL::route( 'home2' )}}"><img src="img/cancelar_2.png"></a>
	</div>
</div><!--container_home_4-->
</div><!--container3-->
</div><!--container_reg-->

{{$footer}}