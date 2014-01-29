{{$header}}

<div id="container_reg">
<div id="container3">
<div id="container_home4">
	<div id="mis_servicios_3"></div>
	<div id="volver_home"><a href="{{URL::route( 'home' )}}"><img src="img/volver_home.png"></a></div>
	<div class="servicio_texto_1">VERIFICA LOS DATOS Y HAZ CLICK EN EL BOTÓN CORRESPONDIENTE</div>
	<div class="logo_digitel" style="top:26px"></div>
	<div class="afiliacion_3" style="top:114px">
		<table id="tabla_5">
			<tr>
				<td>SERVICIO:</td>
			</tr>
			<tr>
				<td style="background-color:rgb(0,137,150);">NÚMERO:</td>
			</tr>
			</tr>
				<td>MONTO Bs.</td>
			</tr>
			<tr>
				<td style="background-color:rgb(0,137,150);">MÉTODO DE PAGO:</td>
			</tr>
			</tr>
				<td>CODIGO PROMOCIONAL:</td>
			</tr>
			<tr>
				<td style="background-color:rgb(0,137,150);">INTRODUZCA CONTRASEÑA:</td>
			</tr>
		</table>		
	</div>
    {{ Form::open(array('url'=>'recargadigitelconfirmar','method' => 'post', 'id' => 'aidi'))  }}
	<div class="afiliacion_9" style="top: 114px;">
		<table id="tabla_6">
			<tr>
				<td>{{Input::get('servicio')}}</td>
			</tr>
			<tr>
				<td style="background-color:rgb(255,255,255);"> 			
					@if (Input::get('numero_digitel'))
						{{Input::get('numero_digitel')}}-{{Input::get('numero_afiliado')}}
					@else
						{{Input::get('numero_afiliado')}}
					@endif
				</td>
			</tr>
			</tr>
				<td>{{Input::get('monto')}}</td>
			</tr>
			<tr>
				<td style="background-color:rgb(255,255,255);">
					@if (Input::get('metodo_pago') == '1') 
						Cuenta de banco
					@elseif (Input::get('metodo_pago') == '2')
						Tarjeta de Cr&eacute;dito
					@else
						C&oacute;digo Promocional
					@endif
				</td>
			</tr>
			</tr>
				<td>{{Input::get('codigo')}}</td>
			</tr>
		</table>
		{{ Form::password( 'password_check', array('id' => 'campo_registro', 'class' => 'validate[required, ajax[validateSecurity]] campo_registro_pwd_check','data-url' => URL::route('validarSecurity')) )}}
	</div>
	<div class="afiliacion_3" style="top:234px; display:none;">
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
	<div class="afiliacion_9" style="top: 234px; display:none;">
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
	<div id="num_tdc_2" style="display:none;">
		{{Form::text( 'numero_tarjeta', null, array('id' => 'campo_registro_10') )}}
	</div>
	<div id="check2" style="display:none;">
		{{Form::checkbox('name', 'value', true)}}<span class="radio_check">Establecer como predeterminada</span>&nbsp;&nbsp;&nbsp;
		{{Form::checkbox('name', 'value')}}<span class="radio_check">Afiliar</span>
	</div>
	<div class="terms" style="display:none;"></div>	
	<div class="buttons_6" style="top: 190px; width:494px">
        {{ Form::hidden('servicio',Input::get('servicio')) }}
		{{ Form::hidden('monto',Input::get('monto')) }}
        {{ Form::hidden('numero_afiliado',Input::get('numero_afiliado')) }}
        {{ Form::hidden('metodo_pago',Input::get('metodo_pago')) }}
        {{ Form::hidden('codigo',Input::get('codigo')) }}
        {{ Form::hidden('numero_digitel',( Input::get('numero_digitel') ? Input::get('numero_digitel') : '000' )) }}

        <button type="submit" style="background: none; border:none; padding:0;" class="on_click_disable">
            <img src="img/confirmar.png" class="img_space">
        </button>

		<a href="{{URL::route( 'digitelrecarga' )}}"><img src="img/modificar.png" class="img_space"></a>
		<a href="{{URL::route( 'home' )}}"><img src="img/cancelar_2.png"></a>
	</div>
	{{ Form::close() }}
	<script type="text/javascript" src="js/ext/jquery-1.7.2.min.js"></script>
    <script type="text/javascript" src="js/jquery.validationEngine.js"></script>
    <script type="text/javascript" src="js/jquery.validationEngine-es.js"></script>

    <script type="text/javascript" src="js/digitelrecarga.js"></script>
    <script type="text/javascript" src="js/ventanas-modales.js"></script>

</div><!--container_home-->
</div><!--container3-->
</div><!--container_reg-->

{{$footer}}