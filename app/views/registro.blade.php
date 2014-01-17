{{$header}}

<div id="container_reg">
	<div id="container3">
		{{Form::open(array('route' => 'registro_final', 'method' => 'post', 'id' => 'registro-form'))}}
		<div id="contenedor_registro_1" class="active">
			<div class="innerContainer">
				<div id="img_reg"></div>
				<div id="paso_1"></div>			
				<div id="form_reg">

					{{Form::label( 'campo_registroa', 'CORREO ELECTRÓNICO: ', array('id' => 'labels_registro','class'=>'required')) . Form::email( 'mail', null, array('id' => 'campo_registroa', 'required', 'class' => 'registro_email validate[required, custom[email],funcCall[emailUnique]]','data-url-validation'=>URL::to('registro/email')) )}}
					@if($errors->has('mail'))
						<p class="error_message">{{ $errors->first('mail') }}</p>
					@endif

					{{Form::label( 'campo_registro', 'CONFIRMAR CORREO ELECTRÓNICO: ', array('id' => 'labels_registro','class'=>'required')) . Form::text( 'mail_check', null, array('id' => 'campo_registro', 'required', 'class' => 'registro_email_check validate[required, custom[email], funcCall[sameEmail]]') )}}
					@if($errors->has('mail_check'))
						<p class="error_message">{{ $errors->first('mail_check') }}</p>
					@endif

					{{Form::label( 'password_registro', 'CONTRASEÑA: ', array('id' => 'labels_registro','class'=>'required')) . Form::password( 'password', array('id' => 'password_registro', 'class' => 'registro_password validate[required, custom[mustLetterNumbers], minSize[7]]') )}}
					@if($errors->has('password'))
						<p class="error_message">{{ $errors->first('password') }}</p>
					@endif

					{{Form::label( 'password_confirm', 'CONFIRMAR CONTRASEÑA: ', array('id' => 'labels_registro','class'=>'required')) . Form::password( 'password_confirmation', array('id' => 'password_confirm', 'class' => 'registro_password_check validate[required, funcCall[samePassword]]') )}}
					@if($errors->has('password_confirmation'))
						<p class="error_message">{{ $errors->first('password_confirmation') }}</p>
					@else
						<p id="labels_registro_2">(Debe estar compuesta por números y letras)</p>
					@endif

					{{Form::label( 'pregunta_registro', 'PREGUNTA DE SEGURIDAD: ', array('id' => 'labels_registro','class'=>'required')) . Form::select('pregunta_seguridad', array('0' => 'Nombre de Mascota', '1' => 'Nombre de Abuelo Paterno', '2' => 'Nombre de Colegio donde Estudió'), null, array('id' => 'pregunta_registro '))}}
					@if($errors->has('pregunta_seguridad'))
						<p class="error_message">{{ $errors->first('pregunta_seguridad') }}</p>
					@endif

					{{Form::label( 'respuesta_registro', 'RESPUESTA DE SEGURIDAD: ', array('id' => 'labels_registro','class'=>'required')) . Form::text( 'respuesta_seguridad', null, array('id' => 'respuesta_registro', 'class' => 'validate[required]') )}}
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
					{{Form::label( 'telefono_registro', 'TELÉFONO CELULAR: ', array('id' => 'labels_registro','class'=>'required')) . Form::select('prefijo_celular', array('0412' => '0412', '0414' => '0414', '0424' => '0424', '0416' => '0416', '0426' => '0426')) . Form::text( 'celular', null, array('id' => 'telefono_registro', 'class' => 'validate[required, custom[integer], minSize[7]]') )}}
					@if($errors->has('prefijo_celular'))
						<p class="error_message">{{ $errors->first('prefijo_celular') }}</p>
					@endif

					{{Form::label( 'email_alterno', 'CORREO ELECTRÓNICO ALTERNO: ', array('id' => 'labels_registro','class'=>'required')) . Form::email( 'maila', null, array('id' => 'email_alterno', 'class' => 'registro_email_alterno validate[required, custom[email],funcCall[notEqualEmail]]') )}}
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
					{{Form::label( 'cedula_registro', 'CÉDULA/PASAPORTE: ', array('id' => 'labels_registro','class'=>'required')) . Form::select('prefijo_ced_pas', array('V' => 'V-', 'E' => 'E-', 'J' => 'J-', 'P' => 'P-')) . Form::text( 'ced_pas', null, array('id' => 'cedula_registro', 'class' => 'registro_ced_pas validate[required, custom[integer], minSize[7]]') )}}
					@if($errors->has('prefijo_ced_pas'))
						<p class="error_message">{{ $errors->first('prefijo_ced_pas') }}</p>
					@endif

					<!-- <div id="aux3"> -->
					{{Form::label( 'nombre_registro', 'NOMBRES: ', array('id' => 'labels_registro','class'=>'required')) . Form::text( 'nombre', null, array('id' => 'nombre_registro', 'class' => 'registro_nombre validate[required, custom[alphanumeric]]') )}}
					@if($errors->has('nombre'))
						<p class="error_message">{{ $errors->first('nombre') }}</p>
					@endif

					{{Form::label( 'apellido_registro', 'APELLIDOS: ', array('id' => 'labels_registro','class'=>'required')) . Form::text( 'apellido', null, array('id' => 'apellido_registro', 'class' => 'registro_apellido validate[required, custom[alphanumeric]]') )}}
					@if($errors->has('apellido'))
						<p class="error_message">{{ $errors->first('apellido') }}</p>
					@endif

					{{Form::label( 'fecha_registro', 'FECHA DE NACIMIENTO: ', array('id' => 'labels_registro','class'=>'required')) . Form::text( 'nacimiento', null, array('placeholder'=>'DD/MM/AAAA','id' => 'fecha_registro', 'class' => 'validate[required, custom[date]]','onKeyUp' => 'this.value=formateafecha(this.value);') )}}
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
					{{ HTML::image(Captcha::img(), 'Captcha image', array('id' => 'captcha_img', 'data-url-post' => URL::route('captcha_reload'))) }}
					{{Form::label( 'validacion', 'CÓDIGO DE VALIDACIÓN: ', array('id' => 'labels_registro')) . Form::text( 'validacion', null, $attributes = array('id' => 'validacion', 'class' => 'validate[required]]'))}}
					@if($errors->has('validacion'))
						<p class="error_message">{{ $errors->first('validacion') }}</p>
					@else
						<p id="labels_registro_2">Haga click sobre la imagen para refrescar</p>
					@endif
					<br><br><br><br><br>
					<div id="check">{{Form::checkbox('name', 'value', true)}}<span class="radio_check3">Deseo recibir correo informativos de TransaMóvil</span><br>
					{{Form::checkbox('registro-terminos-check', '1', null, array('id' => 'registro-terminos-check', 'class' => 'validate[required]','data-errormessage-value-missing'=>'Para continuar debe aceptar los términos y condiciones'))}}<span class="radio_check3">Acepto los <u>Términos y Condiciones</u> de TransaMóvil</span></div>
				</div>
				<div id="form_reg2">
					{{Form::label( 'pais_registro', 'PAÍS: ', array('id' => 'labels_registro','class'=>'required')) . Form::select('pais', $paises, null, array('id' => 'pais_registro', 'class' => 'validate[required] dropdown-small'))}}
					@if($errors->has('pais'))
						<p class="error_message">{{ $errors->first('pais') }}</p>
					@endif

					{{Form::label( 'estado_registro', 'ESTADO: ', array('id' => 'labels_registro','class'=>'required')) . Form::select('estado', array(), null, array('id' => 'estado_registro', 'class' => 'validate[required] dropdown-small','data-url'=>URL::to('location/states')))}}
					@if($errors->has('estado'))
						<p class="error_message">{{ $errors->first('estado') }}</p>
					@endif

                    {{Form::label( 'ciudad_registro', 'CIUDAD: ', array('id' => 'labels_registro','class'=>'required')) . Form::select('ciudad', array(), null, array('id' => 'ciudad_registro', 'class' => 'validate[required] dropdown-small','data-url'=>URL::to('location/cities')))}}
                    @if($errors->has('ciudad'))
                    <p class="error_message">{{ $errors->first('ciudad') }}</p>
                    @endif

					{{Form::label( 'municipio_registro', 'MUNICIPIO: ', array('id' => 'labels_registro','class'=>'required')) . Form::select('municipio', array(), null, array('id' => 'municipio_registro', 'class' => 'validate[required] dropdown-small','data-url'=>URL::to('location/townships')))}}
					@if($errors->has('municipio'))
						<p class="error_message">{{ $errors->first('municipio') }}</p>
					@endif

					{{Form::label( 'direccion_registro', 'DIRECCIÓN: ', array('id' => 'labels_registro','class'=>'required')) . Form::text( 'direccion', null, array('id' => 'direccion_registro', 'class' => 'validate[required]') )}}
					@if($errors->has('direccion'))
						<p class="error_message">{{ $errors->first('direccion') }}</p>
					@endif

					{{Form::label( 'telefono_hab_registro', 'TELÉFONO HABITACIÓN: ', array('id' => 'labels_registro','class'=>'required')) . Form::text( 'tlf_habitacion', null, array('id' => 'telefono_hab_registro', 'class' => 'validate[required]') )}}
					@if($errors->has('tlf_habitacion'))
						<p class="error_message">{{ $errors->first('tlf_habitacion') }}</p>
					@endif

					{{Form::label( 'telefono_ofi_registro', 'TELÉFONO OFICINA: ', array('id' => 'labels_registro','class'=>'required')) . Form::text( 'tlf_oficina', null, array('id' => 'telefono_ofi_registro', 'class' => 'validate[required]') )}}
					@if($errors->has('tlf_oficina'))
						<p class="error_message">{{ $errors->first('tlf_oficina') }}</p>
					@endif

				</div>
				
				<div id="bot_siguiente_2">
					{{Form::button('', array('id' => 'boton_auxiliar_anterior', 'value' => '2', 'style' => 'margin-right:12px;'))}}
					{{Form::button('', array('id' => 'storeRegistry', 'class' => 'boton_auxiliar_siguiente fixx', 'value' => '2', 'style' => 'margin-right:12px;','data-url-post' => URL::to('registro'),'data-url-modal'=> URL::to('modal/registro')))}}
					<!-- <a href="modales/modal_registro.html" class="clsVentanaIFrame" style='margin-right:12px'><img src="img/siguiente.png"></a> -->
					{{Form::button('', array('id' => 'boton_auxiliar_cancelar'))}}
				</div>
			</div>			
		</div><!--contenedor_registro_2-->

		<div id="contenedor_registro_3" class="inactive">
            <div id="img_reg"></div>
			<div id="paso_3"></div>
            <div class="hack_modal"></div>
			<div id="form_reg" class="hide-in-ie">
				<label for="img_cedula" id="labels_registro"> IMÁGEN CÉDULA: <span id="labels_registro_2">(Archivo .jpg)</span></label> <button type="button" class="btn_custom" id="uploadId" data-url="{{URL::to('registro/upload')}}">Cargar Imagen</button>
				<input type="file" class="hide" id="targetUploadId"/>
                @if($errors->has('img_cedula'))
					<p class="error_message">{{ $errors->first('img_cedula') }}</p>
				@endif

                <label for="img_carnet" id="labels_registro"> FOTO CARNET: <span id="labels_registro_2">(Archivo .jpg)</span></label> <button type="button" class="btn_custom" id="uploadCard" data-url="{{URL::to('registro/upload')}}">Cargar Imagen</button>
                <input type="file" class="hide" id="targetUploadCard"/>
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
			<div id="form_reg2" class="hide-in-ie">
                {{Form::label( 'avatar', 'AVATAR:', array('id' => 'labels_registro'))}}
                <div class="avatar-container" style="width: 130px">
				    <img src="img/avatar.png" width="100" id="avatar">
                    <img src="img/upload_avatar.png" style="float:right" id="uploadAvatar">
                    <input type="file" class="hide" id="targetUploadAvatar"/>
                </div>
                <div id="labels_registro_2" style="margin-top:10px;">(Archivo .jpg)</div>
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
			<div id="bot_siguiente_22" class="hide-in-ie">
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
<script type="text/javascript" src="{{asset('js/ventanas-modales.js')}}"></script>
<script type="text/javascript">
    function IsNumeric(valor)
    {
        var log=valor.length; var sw="S";
        for (x=0; x<log; x++)
        { v1=valor.substr(x,1);
            v2 = parseInt(v1);
    //Compruebo si es un valor numérico
            if (isNaN(v2)) { sw= "N";}
        }
        if (sw=="S") {return true;} else {return false; }
    }
    var primerslap=false;
    var segundoslap=false;
    function formateafecha(fecha)
    {
        var long = fecha.length;
        var dia;
        var mes;
        var ano;
        if ((long>=2) && (primerslap==false)) { dia=fecha.substr(0,2);
            if ((IsNumeric(dia)==true) && (dia<=31) && (dia!="00")) { fecha=fecha.substr(0,2)+"/"+fecha.substr(3,7); primerslap=true; }
            else { fecha=""; primerslap=false;}
        }
        else
        { dia=fecha.substr(0,1);
            if (IsNumeric(dia)==false)
            {fecha="";}
            if ((long<=2) && (primerslap=true)) {fecha=fecha.substr(0,1); primerslap=false; }
        }
        if ((long>=5) && (segundoslap==false))
        { mes=fecha.substr(3,2);
            if ((IsNumeric(mes)==true) &&(mes<=12) && (mes!="00")) { fecha=fecha.substr(0,5)+"/"+fecha.substr(6,4); segundoslap=true; }
            else { fecha=fecha.substr(0,3);; segundoslap=false;}
        }
        else { if ((long<=5) && (segundoslap=true)) { fecha=fecha.substr(0,4); segundoslap=false; } }
        if (long>=7)
        { ano=fecha.substr(6,4);
            if (IsNumeric(ano)==false) { fecha=fecha.substr(0,6); }
            else { if (long==10){ if ((ano==0) || (ano<1900) || (ano>2100)) { fecha=fecha.substr(0,6); } } }
        }
        if (long>=10)
        {
            fecha=fecha.substr(0,10);
            dia=fecha.substr(0,2);
            mes=fecha.substr(3,2);
            ano=fecha.substr(6,4);
        // Año no viciesto y es febrero y el dia es mayor a 28
            if ( (ano%4 != 0) && (mes ==02) && (dia > 28) ) { fecha=fecha.substr(0,2)+"/"; }
        }
        return (fecha);
    }
</script>


{{$footer}}