{{$header}}

<div id="container_reg">
<div id="container3">
<div id="contenedor_registro_2">
	<div id="img_reg"></div>
	<div id="paso_2"></div>
	{{Form::open( array( 'method' => 'post' ) )}}
	<div id="form_reg">
		{{Form::label( 'ced_pas', 'CÉDULA/PASAPORTE: *', array('id' => 'labels_registro')) . Form::select('prefijo_ced_pas', array('V' => 'V-', 'E' => 'E-', 'J' => 'J-', 'P' => 'P-')) . Form::text( 'ced_pas', null, array('id' => 'campo_registro3') )}}
		<div id="aux3">
			{{Form::label( 'nombre', 'NOMBRES: *', array('id' => 'labels_registro')) . Form::text( 'nombre', null, array('id' => 'campo_registro') )}}
			{{Form::label( 'apellido', 'APELLIDOS: *', array('id' => 'labels_registro')) . Form::text( 'apellido', null, array('id' => 'campo_registro') )}}
			{{Form::label( 'nacimiento', 'FECHA DE NACIMIENTO: *', array('id' => 'labels_registro')) . Form::text( 'nacimiento', null, array('placeholder'=>'DD/MM/AAAA','id' => 'campo_registro') )}}
			{{Form::label( 'sexo', 'SEXO:', array('id' => 'labels_registro'))}}
			<div id="radio2">
				{{Form::radio('sexo', 'masculino')}}<span class="radio_check2">Masculino</span>
			</div>
			<div id="radio3">
				{{Form::radio('sexo', 'femenino')}}<span class="radio_check2">Femenino</span>
			</div>
		</div>
		<br><br><br><br><br>
		<div id="check">{{Form::checkbox('name', 'value', true)}}<span class="radio_check3">Deseo recibir correo informativos de TransaMóvil</span><br>
		{{Form::checkbox('name', 'value')}}<span class="radio_check3">Acepto los <u>Términos y Condiciones</u> de TransaMóvil</span></div>
	</div>
	<div id="form_reg2">
		{{Form::label( 'pais', 'PAÍS: *', array('id' => 'labels_registro')) . Form::text( 'pais', 'VENEZUELA', $attributes = array('readonly', 'id' => 'campo_registro'))}}
		{{Form::label( 'estado', 'ESTADO: *', array('id' => 'labels_registro')) . Form::select('estado', array('0' => 'MIRANDA'), null, array('id' => 'campo_registro2'))}}
		{{Form::label( 'municipio', 'MUNICIPIO: *', array('id' => 'labels_registro')) . Form::select('municipio', array('0' => 'BARUTA', '1' => 'CHACAO', '2' => 'LIBERTADOR', '3' => 'SUCRE'), null, array('id' => 'campo_registro2'))}}
		{{Form::label( 'ciudad', 'CIUDAD: *', array('id' => 'labels_registro')) . Form::select('ciudad', array('0' => 'CARACAS'), null, array('id' => 'campo_registro2'))}}
		{{Form::label( 'direccion', 'DIRECCIÓN: *', array('id' => 'labels_registro')) . Form::text( 'direccion', null, array('id' => 'campo_registro') )}}
		{{Form::label( 'tlf_habitacion', 'TELÉFONO HABITACIÓN: *', array('id' => 'labels_registro')) . Form::text( 'tlf_habitacion', null, array('id' => 'campo_registro') )}}
		{{Form::label( 'tlf_oficina', 'TELÉFONO OFICINA: *', array('id' => 'labels_registro')) . Form::text( 'tlf_oficina', null, array('id' => 'campo_registro') )}}
	</div>
	<div id="text_reg">*campos obligatorios</div>
	<div id="bot_siguiente_2">
		{{Form::button('', array('id' => 'boton_auxiliar_anterior'))}}&nbsp;&nbsp;<a href="modales/modal_registro.html" class="clsVentanaIFrame"><img src="img/siguiente.png"></a>&nbsp;&nbsp;{{Form::button('', array('id' => 'boton_auxiliar_cancelar'))}}
	</div>

	<script type="text/javascript" src="js/ext/jquery-1.7.2.min.js"></script>
	<script type="text/javascript" src="js/ventanas-modales.js"></script>

</div><!--contenedor_registro_2-->
<div id="container_reg3">
</div><!--container_reg3-->
</div><!--container3-->
</div><!--container_reg-->

{{$footer}}