{{$header}}

<div id="container_reg">
<div id="container3">
<div id="container_home3">
	<div id="mis_servicios"></div>
	<div id="volver_home"><a href="{{URL::route( 'home' )}}"><img src="img/volver_home.png"></a></div>
	<div class="servicio_texto_1">NÚMEROS AFILIADOS AL SERVICIO</div>
	<div class="num_afiliados"></div>
	<div class="buttons_1">
		<img src="img/modificar.png" class="img_space">
		<img src="img/eliminar.png">
	</div>
	<div class="servicio_texto_4">INGRESA LOS DATOS PARA AFILIAR NUEVOS NÚMEROS AL SERVICIO:</div>
	<div class="logo_digitel"></div>
	<div class="afiliacion_1"></div>
	<div class="afiliacion_2">
		{{Form::open( array( 'method' => 'post' ) )}}
		{{Form::select('servicio', array('0' => 'DIGITEL PRE-PAGO', '1' => '', '2' => ''))}}<br>
		{{Form::select('prefijo_celular', array('0412' => '0412', '0414' => '0414', '0424' => '0424', '0416' => '0416', '0426' => '0426')) . Form::text( '' )}}<br> 
		{{Form::text( '' )}}
	</div>
	<div class="buttons_1">
		<a href="{{URL::route( 'afiliaciondigitelconfirmar' )}}"><img src="img/continuar.png" class="img_space"></a>
		<a href="{{URL::route( 'home' )}}"><img src="img/cancelar_2.png"></a>
	</div>
</div><!--container_home-->
</div><!--container3-->
</div><!--container_reg-->

{{$footer}}