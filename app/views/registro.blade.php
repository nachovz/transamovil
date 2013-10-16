{{$header}}

<div id="container_reg">
	<div id="container3">
		{{Form::open(array('route' => 'registro_final', 'method' => 'post'))}}
		<div id="contenedor_registro_1" class="active">
			<div id="img_reg"></div>
			<div id="paso_1"></div>			
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
			<div id="bot_siguiente">
				{{Form::button('', array('id' => 'boton_auxiliar_siguiente', 'value' => '1'))}}&nbsp;&nbsp;{{Form::button('', array('id' => 'boton_auxiliar_cancelar'))}}
			</div>

		</div><!--contenedor_registro_1-->

		<div id="contenedor_registro_2" class="inactive">
			<div id="img_reg"></div>
			<div id="paso_2"></div>			
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
				{{Form::button('', array('id' => 'boton_auxiliar_anterior', 'value' => '2'))}}&nbsp;&nbsp;
				{{Form::button('', array('id' => 'boton_auxiliar_siguiente', 'value' => '2', 'style' => 'display:none;'))}}
				<a href="modales/modal_registro.html" class="clsVentanaIFrame"><img src="img/siguiente.png"></a>&nbsp;&nbsp;
				{{Form::button('', array('id' => 'boton_auxiliar_cancelar'))}}
			</div>			
		</div><!--contenedor_registro_2-->

		<div id="contenedor_registro_3" class="inactive">
			<div id="img_reg"></div>
			<div id="paso_3"></div>			
			<div id="form_reg">
				{{Form::label( 'img_cedula', 'IMÁGEN CÉDULA:', array('id' => 'labels_registro'))}} <span id="labels_registro_2" style="position:absolute;top: 109px;left: 107px;">(Archivo max. 200k)</span> {{Form::text( 'img_cedula', null, array('id' => 'campo_registro4') )}}
				{{Form::label( 'img_carnet', 'FOTO CARNET:', array('id' => 'labels_registro'))}}<span id="labels_registro_2" style="position:absolute;top: 147px;left: 92px;">(Archivo max. 200k)</span>{{Form::text( 'img_carnet', null, array('id' => 'campo_registro4') )}}
				<br><br><br>
				{{Form::label( 'profesion', 'PROFESIÓN:', array('id' => 'labels_registro')) . Form::select('profesion', Profesion::lists('nombre', 'id'), null, array('id' => 'campo_registro2'))}}
				{{Form::label( 'campo_laboral', 'CAMPO LABORAL:', array('id' => 'labels_registro')) . Form::select('campo_laboral', Campo_laboral::lists('nombre', 'id'), null, array('id' => 'campo_registro2'))}}
				{{Form::label( 'nivel_educativo', 'NIVEL EDUCATIVO:', array('id' => 'labels_registro')) . Form::select('nivel_educativo', array('0' => '', '1' => 'Nivel Educativo 1', '2' => 'Nivel Educativo 2'), null, array('id' => 'campo_registro2'))}}
				{{Form::label( 'ingreso_mensual', 'INGRESO MENSUAL:', array('id' => 'labels_registro')) . Form::select('ingreso_mensual', array('0' => '', '1' => 'Ingreso Mensual 1', '2' => 'Ingreso Mensual 2'), null, array('id' => 'campo_registro2'))}}
				{{Form::label( 'estado_civil', 'ESTADO CIVIL:', array('id' => 'labels_registro')) . Form::select('estado', array('0' => '', '1' => 'Estado Civil 1', '2' => 'Estado Civil 2'), null, array('id' => 'campo_registro2'))}}
			</div>
			<div id="form_reg2">
				<img src="img/avatar_provisional.png">
				<div id="aux4">
				{{Form::label( 'banco_principal', 'CUÁL ES TU BANCO PRINCIPAL:', array('id' => 'labels_registro')) . Form::select('banco_principal', Banco::lists('nombre','id'), null, array('id' => 'campo_registro2'))}}
				</div>
				<br>
				<div id="aux5">
				{{Form::label( 'medio_pago', 'PRINCIPAL MEDIO DE PAGO:')}}
				<div id="radio4">
				{{Form::radio('medio_pago', 'Efectivo')}}<span class="radio_check">Efectivo</span><br>
				{{Form::radio('medio_pago', 'Débito')}}<span class="radio_check">Débito</span><br>
				{{Form::radio('medio_pago', 'Tarjeta de Crédito')}}<span class="radio_check">Tarjeta de Crédito</span><br>
				{{Form::radio('medio_pago', 'Transferencia')}}<span class="radio_check">Transferencia</span><br>
				{{Form::radio('medio_pago', 'Cheque')}}<span class="radio_check">Cheque</span><br>
				{{Form::radio('medio_pago', 'Otro')}}<span class="radio_check">Otro</span><br>				
				</div>
				</div>
			</div>
			<div id="text_reg">*campos obligatorios</div>
			<div id="bot_siguiente_2">
				{{Form::button('', array('id' => 'boton_auxiliar_anterior', 'value' => '3'))}}&nbsp;&nbsp;
				{{Form::submit('', array('id' => 'boton_auxiliar_finalizar'))}}&nbsp;&nbsp;
				{{Form::button('', array('id' => 'boton_auxiliar_cancelar'))}}
			</div>
		</div><!--contenedor_registro_3-->		
		{{Form::close()}}
		<div id="container_reg3">
		</div>
	</div><!--container3-->
</div><!--container_reg-->

<script type="text/javascript" src="js/ext/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="js/ventanas-modales.js"></script>
<script type="text/javascript" src="{{asset('js/registro-wizard.js')}}"></script>
{{$footer}}