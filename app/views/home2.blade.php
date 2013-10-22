{{$header}}

<div id="container_reg">
<div id="container3">
<div id="container_home2">
	<span id="title1">ACCESOS RÁPIDOS</span>
	<div class="accesos">
	<img src="img/saldo_actual.png" class="img_space">
	<img src="img/pagos_recargas.png" class="img_space">
	<img src="img/transferencia_usuarios.png" class="img_space">
	<img src="img/historial.png">
	</div>
	<span id="title2">SERVICIOS AFILIADOS</span>
	<div class="servicios">
		<div class="ui iu ">
			<a href="{{URL::route( 'digitelrecarga' )}}"><img src="img/recarga_digitel.png"></a>
		</div>
		<div class="ui iu">
		</div>
		<div class="ui iu">
		</div>
		<div class="ui">
		</div>
		<div class="ui iu">
		</div>
		<div class="ui iu">
		</div>
		<div class="ui iu">
		</div>
		<div class="ui">
		</div>
	</div>
	<span id="title3">CONFIGURACIÓN</span>
	<div class="config">
		<img src="img/mis_cuentas.png" class="img_space">
		<a href="{{URL::route( 'misservicios' )}}"><img src="img/mis_servicios.png" class="img_space"></a>
		<img src="img/administracion.png">
	</div>
	<div id="alertatitulo"></div>
	<div id="noticiatitulo"></div>
</div><!--container_home2-->
<div id="container_alertas"></div><!--container_alertas-->
<div id="container_noticias"></div><!--container_noticias-->
<div id="container_publicidad"><span id="motto">RÁPIDO, FÁCIL <br>Y SEGURO</span></div><!--container_publicidad-->
</div><!--container3-->
</div><!--container_reg-->

{{$footer}}