{{$header}}

<div id="container_reg">
<div id="container3">
<div id="container_home3">
	<div id="mis_servicios_2"></div>
	<div id="volver_home"><a href="{{URL::route( 'home' )}}"><img src="img/volver_home.png"></a></div>
	<div class="servicio_texto_4">POR FAVOR INGRESA LOS DATOS</div>
	<div class="logo_digitel"></div>
	<div class="afiliacion_5" style="background-image:url(img/temporal/8.png);width:415px;height:94px;"></div>
	<div class="afiliacion_7" style="background-image:url(img/temporal/9.png);width:418px;height:188px;top:60px;"></div>
	<div id="check2" style="position: relative;left: 225px;top: 60px;">
		{{Form::checkbox('name', 'value', true)}}<span class="radio_check">Establecer como predeterminada</span><br>
		{{Form::checkbox('name', 'value')}}<span class="radio_check">Afiliar</span>
	</div>
	<div class="terms" style="margin: 75px auto -20px auto;"></div>	
	<div class="buttons_1">
		<a href="{{URL::route( 'home2' )}}"><img src="img/continuar.png" class="img_space"></a>
		<a href="{{URL::route( 'home2' )}}"><img src="img/cancelar_2.png"></a>
	</div>
</div><!--container_home-->
</div><!--container3-->
</div><!--container_reg-->

{{$footer}}