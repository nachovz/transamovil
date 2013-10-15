{{$header}}

<div id="container_reg">
<div id="container3">
<div id="container_reg2">
	<div id="img_reg"></div>
	<div id="paso_2"></div>
	{{Form::open( array( 'method' => 'post' ) )}}
	<div id="form_reg">
		{{Form::label( 'ced_pas', 'CÉDULA/PASAPORTE: *') . Form::select('prefijo_ced_pas', array('V' => 'V-', 'E' => 'E-', 'J' => 'J-', 'P' => 'P-')) . Form::text( 'ced_pas' )}} 
		{{Form::label( 'nombre', 'NOMBRES: *') . Form::text( 'nombre' )}}
		{{Form::label( 'apellido', 'APELLIDOS: *') . Form::text( 'apellido' )}}
		{{Form::label( 'nacimiento', 'FECHA DE NACIMIENTO: *') . Form::text( 'nacimiento' )}}
		{{Form::label( 'sexo', 'SEXO:')}}
		<div id="radio">
		{{Form::radio('sexo', 'masculino')}}<span class="radio_check">Masculino</span><br>		
		{{Form::radio('sexo', 'femenino')}}<span class="radio_check">Femenino</span>
		</div>
		<br><br><br><br><br>
		<div id="check">{{Form::checkbox('name', 'value', true)}}<span class="radio_check">Deseo recibir correo informativos de TransaMóvil</span><br>
		{{Form::checkbox('name', 'value')}}<span class="radio_check">Acepto los <u>Términos y Condiciones</u> de TransaMóvil</span></div>
	</div>
	<div id="form_reg2">
		{{Form::label( 'pais', 'PAÍS: *') . Form::text( 'pais' )}}
		{{Form::label( 'estado', 'ESTADO: *') . Form::select('estado', array('0' => '', '1' => 'Estado 1', '2' => 'Estado 2'))}}
		{{Form::label( 'municipio', 'MUNICIPIO: *') . Form::select('municipio', array('0' => '', '1' => 'Municipio 1', '2' => 'Municipio 2'))}}
		{{Form::label( 'ciudad', 'CIUDAD: *') . Form::select('ciudad', array('0' => '', '1' => 'Ciudad 1', '2' => 'Ciudad 2'))}}
		{{Form::label( 'direccion', 'DIRECCIÓN: *') . Form::text( 'direccion' )}}
		{{Form::label( 'tlf_habitacion', 'TELÉFONO HABITACIÓN: *') . Form::text( 'tlf_habitacion' )}}
		{{Form::label( 'tlf_oficina', 'TELÉFONO OFICINA: *') . Form::text( 'tlf_oficina' )}}
	</div>
	<div id="text_reg">*campos obligatorios</div>
	<div id="bot_siguiente_2"><a href="{{URL::route( 'registro' )}}"><img src="img/anterior.png"></a>&nbsp;&nbsp;<a href="modales/modal_registro.html" class="clsVentanaIFrame"><img src="img/siguiente.png"></a>&nbsp;&nbsp;<a href="{{URL::route( 'index' )}}"><img src="img/cancelar.png"></a></div>

	<script type="text/javascript" src="js/ext/jquery-1.7.2.min.js"></script>
	<script type="text/javascript" src="js/ventanas-modales.js"></script>

</div><!--container_reg2-->
<div id="container_reg3">
</div><!--container_reg3-->
</div><!--container3-->
</div><!--container_reg-->

{{$footer}}