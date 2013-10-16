{{$header}}

<div id="container_reg">
<div id="container3">
<div id="container_home3">
	<div id="mis_servicios"></div>
	<div id="volver_home"><a href="{{URL::route( 'home' )}}"><img src="img/volver_home.png"></a></div>
	<div class="servicio_texto_1">NÚMEROS AFILIADOS AL SERVICIO</div>
	<div class="num_afiliados">
		<table id="tabla1">
			{{Form::open(array('method' => 'post'))}}
			<THEAD>
				<tr>
					<th>&nbsp;</th>
					<th>Servicio</th>
					<th>Número</th>
					<th>Alias</th>
				</tr>
			</THEAD>
			<TBODY>
				<tr>
					<td>{{Form::radio('1', '1', array('id' => 'culito'))}}</td>
					<td>Digitel</td>
					<td>0412-2861187</td>
					<td>No Definido</td>
				</tr>
				<tr>
					<td>{{Form::radio('2', '2')}}</td>
					<td>Digitel</td>
					<td>0412-3434545</td>
					<td>Mamá</td>
				</tr>
				<tr>
					<td>{{Form::radio('3', '3')}}</td>
					<td>Digitel</td>
					<td>0412-9876937</td>
					<td>Ale1</td>
				</tr>
			</TBODY>
		</table>

	</div>
	<div class="buttons_1">
		<img src="img/modificar.png" class="img_space">
		<img src="img/eliminar.png">
	</div>
	<div class="servicio_texto_4">INGRESA LOS DATOS PARA AFILIAR NUEVOS NÚMEROS AL SERVICIO:</div>
	<div class="logo_digitel"></div>
	<div class="afiliacion_1">
		<table id="tabla_2">
			<tr>
				<td>SERVICIO:</td>
			</tr>
			<tr>
				<td style="background-color:rgb(0,137,150);">NÚMERO DIGITEL<span id="ffs">(Móvil,Fijo o BAM):</span></td>
			</tr>
			</tr>
				<td>ALIAS:</td>
			</tr>
		</table>
	</div>
	<div class="afiliacion_2">
		{{Form::open( array( 'method' => 'post' ) )}}
		{{Form::select('servicio', array('0' => 'DIGITEL PRE-PAGO', '1' => '', '2' => ''), null, array('id' => 'campo_registro6'))}}<br>
		{{Form::select('prefijo_celular', array('0412' => '0412', '0414' => '0414', '0424' => '0424', '0416' => '0416', '0426' => '0426'), null, array('id' => 'campo_registro5')) . Form::text( '', null, array('id' => 'campo_registro3') )}}<br> 
		{{Form::text( '', null, array('id' => 'campo_registro7') )}}
	</div>
	<div class="buttons_5">
		{{Form::submit('', array('id' => 'boton_continuar')) . Form::close()}}&nbsp;&nbsp;<a href="{{URL::route( 'home' )}}"><img src="img/cancelar_2.png"></a>
	</div>
</div><!--container_home-->
</div><!--container3-->
</div><!--container_reg-->

{{$footer}}