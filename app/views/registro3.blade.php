{{$header}}

<div id="container_reg">
<div id="container3">
<div id="container_reg2">
	<div id="img_reg"></div>
	<div id="paso_3"></div>
	{{Form::open( array( 'method' => 'post' ) )}}
	<div id="form_reg">
		{{Form::label( 'img_cedula', 'IMÁGEN CÉDULA: (Archivo max. 200k)') . Form::text( 'img_cedula' )}}
		{{Form::label( 'img_carnet', 'IMÁGEN CARNET: (Archivo max. 200k)') . Form::text( 'img_carnet' )}}
		<br><br><br>
		{{Form::label( 'profesion', 'PROFESIÓN:') . Form::select('profesion', array('0' => '', '1' => 'Profesion 1', '2' => 'Profesion 2'))}}
		{{Form::label( 'campo_laboral', 'CAMPO LABORAL:') . Form::select('campo_laboral', array('0' => '', '1' => 'Campo Laboral 1', '2' => 'Campo Laboral 2'))}}
		{{Form::label( 'nivel_educativo', 'NIVEL EDUCATIVO:') . Form::select('nivel_educativo', array('0' => '', '1' => 'Nivel Educativo 1', '2' => 'Nivel Educativo 2'))}}
		{{Form::label( 'ingreso_mensual', 'INGRESO MENSUAL:') . Form::select('ingreso_mensual', array('0' => '', '1' => 'Ingreso Mensual 1', '2' => 'Ingreso Mensual 2'))}}
		{{Form::label( 'estado_civil', 'ESTADO CIVIL:') . Form::select('estado', array('0' => '', '1' => 'Estado Civil 1', '2' => 'Estado Civil 2'))}}
	</div>
	<div id="form_reg2">
		<img src="img/avatar_provisional.png">
		<br><br><br><br>
		{{Form::label( 'banco_principal', 'CUÁL ES TU BANCO PRINCIPAL:') . Form::select('estado', array('0' => '', '1' => 'Banco 1', '2' => 'Banco 2'))}}
		<br>
		{{Form::label( 'medio_pago', 'PRINCIPAL MEDIO DE PAGO:')}}
		<div id="radio">
		{{Form::radio('medio_pago', 'Efectivo')}}<span class="radio_check">Efectivo</span><br>
		{{Form::radio('medio_pago', 'Débito')}}<span class="radio_check">Débito</span><br>
		{{Form::radio('medio_pago', 'Tarjeta de Crédito')}}<span class="radio_check">Tarjeta de Crédito</span><br>
		{{Form::radio('medio_pago', 'Transferencia')}}<span class="radio_check">Transferencia</span><br>
		{{Form::radio('medio_pago', 'Cheque')}}<span class="radio_check">Cheque</span><br>
		{{Form::radio('medio_pago', 'Otro')}}<span class="radio_check">Otro</span><br>				
		</div>
	</div>
	<div id="text_reg">*campos obligatorios</div>
	<div id="bot_siguiente_2"><a href="{{URL::route( 'registro2' )}}"><img src="img/anterior.png"></a>&nbsp;&nbsp;<a href="{{URL::route( 'home' )}}"><img src="img/finalizar.png"></a>&nbsp;&nbsp;<a href="{{URL::route( 'index' )}}"><img src="img/cancelar.png"></a></div>
</div><!--container_reg2-->
<div id="container_reg3">
</div><!--container_reg3-->
</div><!--container3-->
</div><!--container_reg-->

{{$footer}}