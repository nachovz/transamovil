{{$header}}

<div id="container_reg">
<div id="container3">
<div id="container_home3">
	<div id="mis_servicios_2"></div>
	<div id="volver_home"><a href="{{URL::route( 'home' )}}"><img src="img/volver_home.png"></a></div>

	<?php $afiliacion = Auth::user()->afiliaciones()->where('numero', '=',Session::get('prefijo').Session::get('numero'))->get()->first();?>
		@if( $afiliacion != null )
			<div class="servicio_texto_1">EL NÚMERO YA HA SIDO AFILIADO, VERIFICAR E INTENTAR DE NUEVO.</div>
			<div class="buttons_3" style="margin:210px auto 0px;width: 322px;height: 52px">
		@else


	<div class="servicio_texto_1">VERIFICA LOS DATOS Y HAS CLICK EN EL BOTÓN CORRESPONDIENTE</div>
	<div class="logo_digitel"></div>
	<div class="afiliacion_3">
		<table id="tabla_3">
			<tr>
				<td>SERVICIO:</td>
			</tr>
			<tr>
				<td style="background-color:rgb(0,137,150);">NÚMERO DIGITEL <span id="ffs">(Móvil, Fijo o BAM):</span></td>
			</tr>
			</tr>
				<td>ALIAS:</td>
			</tr>
		</table>		
	</div>
	<div class="afiliacion_9" style="right:174px">
		<table id="tabla_4">
			<tr>
				<td>DIGITEL PRE-PAGO:</td>
			</tr>
			<tr>
				<td style="background-color:rgb(255,255,255);">{{Input::get('prefijo')}}-{{Input::get('numero')}}</td>
			</tr>
			</tr>
				<td>{{Input::get('alias')}}</td>
			</tr>
		</table>
	</div>
	<!--<div id="clave_pwd">
		{{Form::open(array('method' => 'post')) . Form::password( 'password_check', array('id' => 'campo_registro') )}}
	</div>-->
	<div class="buttons_3">
        <!--[if IE 8]>
            <a href="{{URL::route( 'modal_afiliacion_confirmar', array( Input::get('numero'), Input::get('alias'), Input::get('prefijo') ) )}}" class="clsVentanaIFrame2-IE"><img src="img/confirmar.png" class="img_space"></a>
        <![endif]-->

        <!--[if !IE 8]><!-->
            <a href="{{URL::route( 'modal_afiliacion_confirmar', array( Input::get('numero'), Input::get('alias'), Input::get('prefijo') ) )}}" class="clsVentanaIFrame2"><img src="img/confirmar.png" class="img_space"></a>
        <!--<![endif]-->
	@endif
		<a href="{{URL::route( 'afiliaciondigitel' )}}"><img src="img/modificar.png" class="img_space"></a>
		<a href="{{URL::route( 'home' )}}"><img src="img/cancelar_2.png"></a>
	</div>
	<script type="text/javascript" src="js/ext/jquery-1.7.2.min.js"></script>
	<script type="text/javascript" src="js/ventanas-modales.js"></script>
</div><!--container_home-->
</div><!--container3-->
</div><!--container_reg-->

{{$footer}}