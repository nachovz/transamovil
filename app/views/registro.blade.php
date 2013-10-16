{{$header}}

<div id="container_reg">
<div id="container3">
<div id="contenedor_registro_1">
	<div id="img_reg"></div>
	<div id="paso_1"></div>
	{{Form::open(array('route' => 'registro2', 'method' => 'post'))}}
	<div id="form_reg">
		{{Form::label( 'usuario', 'USUARIO: *', array('id' => 'labels_registro')) . Form::text( 'usuario', null, array('id' => 'campo_registro') )}}
		{{Form::label( 'password', 'CONTRASEÑA: *', array('id' => 'labels_registro')) . Form::password( 'password', array('id' => 'campo_registro') )}}
		{{Form::label( 'password_check', 'CONFIRMAR CONTRASEÑA: *', array('id' => 'labels_registro')) . Form::password( 'password_check', array('id' => 'campo_registro') )}}
		<p id="labels_registro_2">(Debe estar compuesta por números y letras)</p>
		{{Form::label( 'pregunta_seguridad', 'PREGUNTA DE SEGURIDAD: *', array('id' => 'labels_registro')) . Form::select('pregunta_seguridad', array('0' => 'Nombre de Mascota', '1' => 'Nombre de Abuelo Paterno', '2' => 'Nombre de Colegio donde Estudió'), null, array('id' => 'campo_registro2'))}}
		{{Form::label( 'respuesta_seguridad', 'RESPUESTA DE SEGURIDAD: *', array('id' => 'labels_registro')) . Form::text( 'respuesta_seguridad', null, array('id' => 'campo_registro') )}}
	</div>
	<div id="form_reg2">
		{{Form::label( 'computadora_confianza', 'REGISTRAR COMPUTADORA DE CONFIANZA:', array('id' => 'labels_registro_3'))}}
		<p id="labels_registro_4">(Computadora de Uso Frecuente)</p>
		<div id="radio">
		{{Form::radio('computadora_confianza', 'No es de confianza')}}<span class="radio_check">No es de confianza</span><br>
		{{Form::radio('computadora_confianza', 'Casa')}}<span class="radio_check">Casa</span><br>
		{{Form::radio('computadora_confianza', 'Oficina')}}<span class="radio_check">Oficina</span><br>
		{{Form::radio('computadora_confianza', 'Otro')}}<span class="radio_check">Otro</span>
		</div>
		<div id="auxiliar">
			{{Form::label( 'celular', 'TELÉFONO CELULAR: *', array('id' => 'labels_registro')) . Form::select('prefijo_celular', array('0412' => '0412', '0414' => '0414', '0424' => '0424', '0416' => '0416', '0426' => '0426')) . Form::text( 'celular', null, array('id' => 'campo_registro3') )}} 
			{{Form::label( 'mail', 'CORREO ELECTRÓNICO: *', array('id' => 'labels_registro')) . Form::email( 'mail', null, array('id' => 'campo_registro') )}}
		</div>
	</div>
	<div id="text_reg">*campos obligatorios</div>
	<div id="bot_siguiente">{{Form::button('', array('id' => 'boton_auxiliar_siguiente'))}}&nbsp;&nbsp;{{Form::button('', array('id' => 'boton_auxiliar_cancelar'))}}</div>

</div><!--contenedor_registro_1-->
<div id="container_reg3">
</div><!--container_reg3-->
</div><!--container3-->
</div><!--container_reg-->

{{$footer}}