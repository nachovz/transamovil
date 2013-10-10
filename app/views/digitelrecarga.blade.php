{{$header}}

<div id="container_reg">
<div id="container3">
<div id="container_home3">
	<div id="mis_servicios_2"></div>
	<div id="volver_home"><a href="{{URL::route( 'home' )}}"><img src="img/volver_home.png"></a></div>
	<div class="servicio_texto_4">POR FAVOR INGRESA LOS DATOS</div>
	<div class="logo_digitel"></div>
	<div class="afiliacion_5"></div>
	<div class="afiliacion_6">
		{{Form::open( array( 'method' => 'post' ) )}}
		{{Form::select('servicio', array('0' => 'DIGITEL PRE-PAGO', '1' => '', '2' => ''))}}<br>
		{{Form::select('prefijo_celular', array('0412' => '0412', '0414' => '0414', '0424' => '0424', '0416' => '0416', '0426' => '0426')) . Form::text( '' )}}<br> 
		{{Form::select('numeros_afiliados', array('0' => '0412-3434545 - Mamá', '1' => '', '2' => ''))}}<br>
		{{Form::text( 'monto' )}}<br>
		{{Form::select('metodo_pago', array('0' => 'Nueva Tarjeta de Crédito', '1' => '', '2' => ''))}}<br>
	</div>
	<div class="afiliacion_7"></div>
	<div class="tdc"></div>
	<div class="afiliacion_8">
		{{Form::text( 'num_tarjeta' )}}<br>
		{{Form::text( 'codigo_seguridad' )}}<br>
		{{Form::select('vencimiento_mes', array('0' => 'Mes', '1' => '', '2' => '')) . Form::select('vencimiento_año', array('0' => 'Año', '1' => '', '2' => ''))}}<br>
		{{Form::text( 'banco_emisor' )}}<br>
		{{Form::text( 'nombre_impreso' )}}<br>
		{{Form::text( 'cedula' )}}<br>
		<div id="check2">
		{{Form::checkbox('name', 'value', true)}}<span class="radio_check">Establecer como predeterminada</span><br>
		{{Form::checkbox('name', 'value')}}<span class="radio_check">Afiliar</span>
		</div>		
	</div>
	<div class="terms"></div>
	<div class="buttons_1">
		<a href="{{URL::route( 'digitelrecargaconfirmar' )}}"><img src="img/continuar.png" class="img_space"></a>
		<a href="{{URL::route( 'home2' )}}"><img src="img/cancelar_2.png"></a>
	</div>
</div><!--container_home-->
</div><!--container3-->
</div><!--container_reg-->

{{$footer}}