{{$header}}

<div id="container_reg">
	<div id="container3">
		{{Form::open(array('route' => 'registro_final', 'method' => 'post', 'id' => 'registro-form'))}}
		<div id="contenedor_registro_1" class="active">
			<div class="innerContainer">
				<div id="img_reg"></div>
				<div id="paso_1"></div>			
				<div id="form_reg">

					{{Form::label( 'mail', 'CORREO ELECTRÓNICO: *', array('id' => 'labels_registro')) . Form::email( 'mail', null, array('id' => 'campo_registroa', 'required', 'class' => 'registro_email validate[required, custom[email]]') )}}
					@if($errors->has('mail'))
						<p class="error_message">{{ $errors->first('mail') }}</p>
					@endif

					{{Form::label( 'mail', 'CONFIRMAR CORREO ELECTRÓNICO: *', array('id' => 'labels_registro')) . Form::text( 'mail_check', null, array('id' => 'campo_registro', 'required', 'class' => 'registro_email_check validate[required, custom[email], funcCall[sameEmail]]') )}}
					@if($errors->has('mail_check'))
						<p class="error_message">{{ $errors->first('mail_check') }}</p>
					@endif

					{{Form::label( 'password', 'CONTRASEÑA: *', array('id' => 'labels_registro')) . Form::password( 'password', array('id' => 'password_registro', 'class' => 'registro_password validate[required, custom[mustLetterNumbers], minSize[7]]') )}}
					@if($errors->has('password'))
						<p class="error_message">{{ $errors->first('password') }}</p>
					@endif

					{{Form::label( 'password_confirmation', 'CONFIRMAR CONTRASEÑA: *', array('id' => 'labels_registro')) . Form::password( 'password_confirmation', array('id' => 'password_confirm', 'class' => 'registro_password_check validate[required, funcCall[samePassword]]') )}}
					@if($errors->has('password_confirmation'))
						<p class="error_message">{{ $errors->first('password_confirmation') }}</p>
					@else
						<p id="labels_registro_2">(Debe estar compuesta por números y letras)</p>
					@endif

					{{Form::label( 'pregunta_seguridad', 'PREGUNTA DE SEGURIDAD: *', array('id' => 'labels_registro')) . Form::select('pregunta_seguridad', array('0' => 'Nombre de Mascota', '1' => 'Nombre de Abuelo Paterno', '2' => 'Nombre de Colegio donde Estudió'), null, array('id' => 'campo_registro2 '))}}
					@if($errors->has('pregunta_seguridad'))
						<p class="error_message">{{ $errors->first('pregunta_seguridad') }}</p>
					@endif

					{{Form::label( 'respuesta_seguridad', 'RESPUESTA DE SEGURIDAD: *', array('id' => 'labels_registro')) . Form::text( 'respuesta_seguridad', null, array('id' => 'respuesta_registro', 'class' => 'validate[required]') )}}
					@if($errors->has('respuesta_seguridad'))
						<p class="error_message">{{ $errors->first('respuesta_seguridad') }}</p>
					@endif

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
					{{Form::label( 'celular', 'TELÉFONO CELULAR: *', array('id' => 'labels_registro')) . Form::select('prefijo_celular', array('0412' => '0412', '0414' => '0414', '0424' => '0424', '0416' => '0416', '0426' => '0426')) . Form::text( 'celular', null, array('id' => 'telefono_registro', 'class' => 'validate[required, custom[integer], minSize[7]]') )}} 
					@if($errors->has('prefijo_celular'))
						<p class="error_message">{{ $errors->first('prefijo_celular') }}</p>
					@endif

					{{Form::label( 'maila', 'CORREO ELECTRÓNICO ALTERNO: *', array('id' => 'labels_registro')) . Form::email( 'maila', null, array('id' => 'email_alterno', 'class' => 'registro_email_alterno validate[required, custom[email]]') )}}
					@if($errors->has('maila'))
						<p class="error_message">{{ $errors->first('maila') }}</p>
					@endif

					</div>
				</div>
				
				<div id="bot_siguiente">
					{{Form::button('', array('class' => 'boton_auxiliar_siguiente sig', 'id' => '', 'value' => '1', 'style' => 'margin-right:12px;'))}}
					{{Form::button('', array('class' => 'canc2', 'id' => 'boton_auxiliar_cancelar_2'))}}
				</div>
			</div>
		</div><!--contenedor_registro_1-->

		<div id="contenedor_registro_2" class="inactive">
			<div class="innerContainer">
				<div id="img_reg"></div>
				<div id="paso_2"></div>			
				<div id="form_reg">
					{{Form::label( 'ced_pas', 'CÉDULA/PASAPORTE: *', array('id' => 'labels_registro')) . Form::select('prefijo_ced_pas', array('V' => 'V-', 'E' => 'E-', 'J' => 'J-', 'P' => 'P-')) . Form::text( 'ced_pas', null, array('id' => 'cedula_registro', 'class' => 'registro_ced_pas validate[required, custom[integer], minSize[7]]') )}}
					@if($errors->has('prefijo_ced_pas'))
						<p class="error_message">{{ $errors->first('prefijo_ced_pas') }}</p>
					@endif

					<!-- <div id="aux3"> -->
					{{Form::label( 'nombre', 'NOMBRES: *', array('id' => 'labels_registro')) . Form::text( 'nombre', null, array('id' => 'nombre_registro', 'class' => 'registro_nombre validate[required, custom[onlyLetterSp]]') )}}
					@if($errors->has('nombre'))
						<p class="error_message">{{ $errors->first('nombre') }}</p>
					@endif

					{{Form::label( 'apellido', 'APELLIDOS: *', array('id' => 'labels_registro')) . Form::text( 'apellido', null, array('id' => 'apellido_registro', 'class' => 'registro_apellido validate[required, custom[onlyLetterSp]]') )}}
					@if($errors->has('apellido'))
						<p class="error_message">{{ $errors->first('apellido') }}</p>
					@endif

					{{Form::label( 'nacimiento', 'FECHA DE NACIMIENTO: *', array('id' => 'labels_registro')) . Form::text( 'nacimiento', null, array('placeholder'=>'DD/MM/AAAA','id' => 'fecha_registro', 'class' => 'validate[required, custom[date]]') )}}
					@if($errors->has('nacimiento'))
						<p class="error_message">{{ $errors->first('nacimiento') }}</p>
					@endif

					{{Form::label( 'sexo', 'SEXO:', array('id' => 'labels_registro'))}}
					<div id="radio2">
						{{Form::radio('sexo', 'masculino')}}<span class="radio_check4">Masculino</span>
					</div>
					<div id="radio3">
					{{Form::radio('sexo', 'femenino')}}<span class="radio_check4">Femenino</span>
					</div>
					@if($errors->has('sexo'))
						<p class="error_message">{{ $errors->first('sexo') }}</p>
					@endif

					<br><br>
					{{ HTML::image(Captcha::img(), 'Captcha image') }}
					{{Form::label( 'validacion', 'CÓDIGO DE VALIDACIÓN: ', array('id' => 'labels_registro')) . Form::text( 'validacion', null, $attributes = array('id' => 'validacion', 'class' => 'validate[required]'))}}
					@if($errors->has('validacion'))
						<p class="error_message">{{ $errors->first('validacion') }}</p>
					@endif
					<br><br><br><br><br>
					<div id="check">{{Form::checkbox('name', 'value', true)}}<span class="radio_check3">Deseo recibir correo informativos de TransaMóvil</span><br>
					{{Form::checkbox('registro-terminos-check', '1', null, array('id' => 'registro-terminos-check', 'class' => 'validate[required]'))}}<span class="radio_check3">Acepto los <u>Términos y Condiciones</u> de TransaMóvil</span></div>
				</div>
				<div id="form_reg2">
					{{Form::label( 'pais', 'PAÍS: *', array('id' => 'labels_registro')) . Form::text( 'pais', 'VENEZUELA', $attributes = array('readonly', 'id' => 'pais_registro', 'class' => 'validate[required]'))}}
					@if($errors->has('pais'))
						<p class="error_message">{{ $errors->first('pais') }}</p>
					@endif

					{{Form::label( 'estado', 'ESTADO: *', array('id' => 'labels_registro')) . Form::select('estado', $estados, null, array('id' => 'estado_registro', 'class' => 'validate[required]'))}}
					@if($errors->has('estado'))
						<p class="error_message">{{ $errors->first('estado') }}</p>
					@endif

					{{Form::label( 'municipio', 'MUNICIPIO: *', array('id' => 'labels_registro')) . Form::select('municipio', $municipios, null, array('id' => 'municipio_registro', 'class' => 'validate[required]'))}}
					@if($errors->has('municipio'))
						<p class="error_message">{{ $errors->first('municipio') }}</p>
					@endif

					{{Form::label( 'ciudad', 'CIUDAD: *', array('id' => 'labels_registro')) . Form::select('ciudad', $ciudades, null, array('id' => 'ciudad_registro', 'class' => 'validate[required]'))}}
					@if($errors->has('ciudad'))
						<p class="error_message">{{ $errors->first('ciudad') }}</p>
					@endif

					{{Form::label( 'direccion', 'DIRECCIÓN: *', array('id' => 'labels_registro')) . Form::text( 'direccion', null, array('id' => 'direccion_registro', 'class' => 'validate[required]') )}}
					@if($errors->has('direccion'))
						<p class="error_message">{{ $errors->first('direccion') }}</p>
					@endif

					{{Form::label( 'tlf_habitacion', 'TELÉFONO HABITACIÓN: *', array('id' => 'labels_registro')) . Form::text( 'tlf_habitacion', null, array('id' => 'telefono_hab_registro', 'class' => 'validate[required]') )}}
					@if($errors->has('tlf_habitacion'))
						<p class="error_message">{{ $errors->first('tlf_habitacion') }}</p>
					@endif

					{{Form::label( 'tlf_oficina', 'TELÉFONO OFICINA: *', array('id' => 'labels_registro')) . Form::text( 'tlf_oficina', null, array('id' => 'telefono_ofi_registro', 'class' => 'validate[required]') )}}
					@if($errors->has('tlf_oficina'))
						<p class="error_message">{{ $errors->first('tlf_oficina') }}</p>
					@endif

				</div>
				
				<div id="bot_siguiente_2">
					{{Form::button('', array('id' => 'boton_auxiliar_anterior', 'value' => '2', 'style' => 'margin-right:12px;'))}}
					{{Form::button('', array('id' => '', 'class' => 'boton_auxiliar_siguiente fixx', 'value' => '2', 'style' => 'margin-right:12px;'))}}
					<!-- <a href="modales/modal_registro.html" class="clsVentanaIFrame" style='margin-right:12px'><img src="img/siguiente.png"></a> -->
					{{Form::button('', array('id' => 'boton_auxiliar_cancelar'))}}
				</div>
			</div>			
		</div><!--contenedor_registro_2-->

		<div id="contenedor_registro_3" class="inactive">
			<div id="img_reg"></div>
			<div id="paso_3"></div>			
			<div id="form_reg">
				{{Form::label( 'img_cedula', 'IMÁGEN CÉDULA:', array('id' => 'labels_registro'))}} <span id="labels_registro_2" style="position:absolute;top: 109px;left: 107px;">(Archivo max. 200k)</span> {{Form::text( 'img_cedula', null, array('id' => 'campo_registro4') )}}
				@if($errors->has('img_cedula'))
					<p class="error_message">{{ $errors->first('img_cedula') }}</p>
				@endif

				{{Form::label( 'img_carnet', 'FOTO CARNET:', array('id' => 'labels_registro'))}}<span id="labels_registro_2" style="position:absolute;top: 147px;left: 92px;">(Archivo max. 200k)</span>{{Form::text( 'img_carnet', null, array('id' => 'campo_registro4') )}}
				@if($errors->has('img_carnet'))
					<p class="error_message">{{ $errors->first('img_carnet') }}</p>
				@endif

				<br><br><br>
				{{Form::label( 'profesion', 'PROFESIÓN:', array('id' => 'labels_registro')) . Form::select('profesion', Profesion::lists('nombre', 'id'), null, array('id' => 'campo_registro2'))}}
				@if($errors->has('profesion'))
					<p class="error_message">{{ $errors->first('profesion') }}</p>
				@endif

				{{Form::label( 'campo_laboral', 'CAMPO LABORAL:', array('id' => 'labels_registro')) . Form::select('campo_laboral', Campo_laboral::lists('nombre', 'id'), null, array('id' => 'campo_registro2'))}}
				@if($errors->has('campo_laboral'))
					<p class="error_message">{{ $errors->first('campo_laboral') }}</p>
				@endif

				{{Form::label( 'nivel_educativo', 'NIVEL EDUCATIVO:', array('id' => 'labels_registro')) . 
					Form::select(
						'nivel_educativo',
						array(
							'Primaria' => 'Primaria',
							'Secundaria' => 'Secundaria',
							'TSU' => 'TSU',
							'Universitario' => 'Universitario',
						),
						null,
						array('id' => 'campo_registro2')
					)
				}}
				@if($errors->has('nivel_educativo'))
					<p class="error_message">{{ $errors->first('nivel_educativo') }}</p>
				@endif

				{{Form::label( 'ingreso_mensual', 'INGRESO MENSUAL:', array('id' => 'labels_registro')) . Form::select('ingreso_mensual', array('0' => '', '1' => 'Ingreso Mensual 1', '2' => 'Ingreso Mensual 2'), null, array('id' => 'campo_registro2'))}}
				@if($errors->has('ingreso_mensual'))
					<p class="error_message">{{ $errors->first('ingreso_mensual') }}</p>
				@endif

				{{Form::label( 'estado_civil', 'ESTADO CIVIL:', array('id' => 'labels_registro')) . Form::select(
						'estado_civil',
						array(
							'Soltero' => 'Soltero',
							'Casado' => 'Casado',
							'Viudo' => 'Viudo',
							'Divorciado' => 'Divorciado',
						),
						null,
						array('id' => 'campo_registro2')
					)
				}}
				@if($errors->has('estado_civil'))
					<p class="error_message">{{ $errors->first('estado_civil') }}</p>
				@endif

			</div>
			<div id="form_reg2">
				<img src="img/avatar_provisional.png">
				<div id="aux4">
				{{Form::label( 'banco_principal', 'CUÁL ES TU BANCO PRINCIPAL:', array('id' => 'labels_registro')) . Form::select('banco_principal', Banco::lists('nombre','id'), null, array('id' => 'campo_registro2'))}}
				@if($errors->has('banco_principal'))
					<p class="error_message">{{ $errors->first('banco_principal') }}</p>
				@endif
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
				@if($errors->has('medio_pago'))
					<p class="error_message">{{ $errors->first('medio_pago') }}</p>
				@endif

				</div>
			</div>
			<div id="bot_siguiente_22">
				<!--{{Form::button('', array('class' => 'ant', 'id' => 'boton_auxiliar_anterior', 'value' => '3', 'style' => 'margin-right:12px;'))}}-->
				{{Form::submit('', array('id' => 'boton_auxiliar_finalizar', 'style' => 'margin-right:12px;'))}}
				{{Form::button('', array('class' => 'canc', 'id' => 'boton_auxiliar_cerrar', ))}}
			</div>
		</div><!--contenedor_registro_3-->		
		{{Form::close()}}
	</div><!--container3-->
</div><!--container_reg-->

<!-- <script type="text/javascript" src="js/ventanas-modales.js"></script> -->
<script type="text/javascript" src="{{asset('js/registro-wizard.js')}}"></script>
{{$footer}}