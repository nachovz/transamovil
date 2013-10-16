{{$header}}

<div id="container_reg">
<div id="container3">
<div id="contenedor_registro_3">
	<div id="img_reg"></div>
	<div id="paso_3"></div>
	{{Form::open( array( 'method' => 'post' ) )}}
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
		{{Form::button('', array('id' => 'boton_auxiliar_anterior'))}}&nbsp;&nbsp;{{Form::button('', array('id' => 'boton_auxiliar_finalizar'))}}&nbsp;&nbsp;{{Form::button('', array('id' => 'boton_auxiliar_cancelar'))}}
	</div>
</div><!--contenedor_registro_3-->
<div id="container_reg3">
</div><!--container_reg3-->
</div><!--container3-->
</div><!--container_reg-->

{{$footer}}