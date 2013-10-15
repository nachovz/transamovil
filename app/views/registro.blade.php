{{$header}}

<div id="container_reg">
<div id="container3">
<div id="container_reg2">
	<div id="img_reg"></div>
	<div id="paso_1"></div>
	{{Form::open( array( 'method' => 'post' ) )}}
	<div id="form_reg">
		{{Form::label( 'usuario', 'USUARIO: *') . Form::text( 'usuario' )}}
		{{Form::label( 'password', 'CONTRASEÑA: *') . Form::password( 'password' )}}
		{{Form::label( 'password_check', 'CONFIRMAR CONTRASEÑA: *') . Form::password( 'password_check' )}}
		<label>Debe estar compuesta por números y letras</label>
		{{Form::label( 'pregunta_seguridad', 'PREGUNTA DE SEGURIDAD: *') . Form::select('pregunta_seguridad', array('0' => '', '1' => 'Pregunta de Seguridad', '2' => 'Pregunta de Seguridad'))}}
		{{Form::label( 'respuesta_seguridad', 'RESPUESTA DE SEGURIDAD: *') . Form::text( 'respuesta_seguridad' )}}
	</div>
	<div id="form_reg2">
		{{Form::label( 'computadora_confianza', 'REGISTRAR COMPUTADORA DE CONFIANZA:')}}
		<div id="radio">
		{{Form::radio('computadora_confianza', 'No es de confianza')}}<span class="radio_check">No es de confianza</span><br>
		{{Form::radio('computadora_confianza', 'Casa')}}<span class="radio_check">Casa</span><br>
		{{Form::radio('computadora_confianza', 'Oficina')}}<span class="radio_check">Oficina</span><br>
		{{Form::radio('computadora_confianza', 'Otro')}}<span class="radio_check">Otro</span>
		</div>
		<br>
		{{Form::label( 'celular', 'TELÉFONO CELULAR: *') . Form::select('prefijo_celular', array('0412' => '0412', '0414' => '0414', '0424' => '0424', '0416' => '0416', '0426' => '0426')) . Form::text( 'celular' )}} 
		{{Form::label( 'mail', 'CORREO ELECTRÓNICO: *' ) . Form::email( 'mail' )}}
	</div>
	<div id="text_reg">*campos obligatorios</div>
	<div id="bot_siguiente"><a href="{{URL::route( 'registro2' )}}"><img src="img/siguiente.png"></a>&nbsp;&nbsp;<a href="{{URL::route( 'index' )}}"><img src="img/cancelar.png"></a></div>

</div><!--container_reg2-->
<div id="container_reg3">
</div><!--container_reg3-->
</div><!--container3-->
</div><!--container_reg-->

{{$footer}}