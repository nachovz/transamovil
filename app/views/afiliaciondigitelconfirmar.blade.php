{{$header}}

<div id="container_reg">
<div id="container3">
<div id="container_home3">
	<div id="mis_servicios_2"></div>
	<div id="volver_home"><a href="{{URL::route( 'home' )}}"><img src="img/volver_home.png"></a></div>
	<div class="servicio_texto_4">VERIFICA LOS DATOS Y HAS CLICK EN EL BOTÓN CORRESPONDIENTE</div>
	<div class="logo_digitel"></div>
	<div class="afiliacion_3"></div>
	<div class="afiliacion_4"></div>
	<div class="buttons_3">
		<a href="modales/modal_afiliacion.html" class="clsVentanaIFrame2"><img src="img/confirmar.png" class="img_space"></a>
		<a href="{{URL::route( 'afiliaciondigitel' )}}"><img src="img/modificar.png" class="img_space"></a>
		<a href="{{URL::route( 'home' )}}"><img src="img/cancelar_2.png"></a>
	</div>
	<script type="text/javascript" src="js/ext/jquery-1.7.2.min.js"></script>
	<script type="text/javascript" src="js/ventanas-modales.js"></script>
</div><!--container_home-->
</div><!--container3-->
</div><!--container_reg-->

{{$footer}}