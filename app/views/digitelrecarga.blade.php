{{$header}}
<?php 
	$user 		= Auth::user();
	$numerillo 	= Afiliacion::where( 'usuario_id', '=', $user->id )->get()->all();
?>

<script>
$(document).ready(function(){

	//Seleccione fix
	if ($('.nuevocelular').val() != null){
		$(".numafiliado").attr("disabled", "disabled")
	};

	$('.selectmetodopago').on('change',function(){
	     var selection = $(this).val();
	    switch(selection){
	    	case "Código Promocional":
	    		$(".culo1").show()
	    		$(".culo2").show()
	    		$(".monnto").val("20")
	    		$(".monnto").attr('readonly', 'readonly')
	   			break;
	    	default:
	 	 	  	$(".culo1").hide()
	 		  	$(".culo2").hide()
	    }
	});

	$('.nuevocelular').on('input',function(){
        if( !isNaN($(this).val()) ){
        $(".numafiliado").attr("disabled", "disabled")
        }
        
        if( $(this).val().length == 0 ){
        $(".numafiliado").removeAttr("disabled")
        }
    });

    $('.numafiliado').on('change',function(){
        if( $(this).val()==="SELECCIONE"){
        $('.nuevocelular').removeAttr("disabled")
        $('.pref_dig').removeAttr("disabled")
        }
        else{
        $('.nuevocelular').attr("disabled", "disabled")
        $('.pref_dig').attr("disabled", "disabled")
        }
    });

    var elements = document.getElementsByTagName("INPUT");
    for (var i = 0; i < elements.length; i++) {
        elements[i].oninvalid = function(e) {
            e.target.setCustomValidity("");
            if (!e.target.validity.valid) {
                e.target.setCustomValidity("Error");
            }
        };
        elements[i].oninput = function(e) {
            e.target.setCustomValidity("");
        };
    }
});
</script>

<div id="container_reg">
<div id="container3">
<div id="container_home4">
	<div id="mis_servicios_3"></div>
	<div id="volver_home"><a href="{{URL::route( 'home' )}}"><img src="img/volver_home.png"></a></div>
	<div class="servicio_texto_1">POR FAVOR INGRESA LOS DATOS</div>
	<div class="logo_digitel" style="top:26px"></div>
	<div class="afiliacion_3" style="top:114px;">
		<table id="tabla_5">
			<tr>	
				<td>SERVICIO:</td>
			</tr>
			<tr>
				<td style="background-color:rgb(0,137,150);">NÚMERO DIGITEL<span id="ffs"> (Móvil, Fijo o BAM):</span></td>
			</tr>
			</tr>
				<td>NÚMEROS AFILIADOS:</td>
			</tr>
			<tr>
				<td style="background-color:rgb(0,137,150);">MONTO BsF.</td>
			</tr>
			</tr>
				<td>MÉTODO DE PAGO:</td>
			</tr>
		</table>		
	
	<table id="tabla_7" style="margin-top:20px;">
		<tr class ="culo1" style="display:none;">
			<td style="background-color:rgb(0,137,150);">CÓDIGO PROMOCIONAL:</td>
		</tr>
	</table>
	</div> 
	<div id="aux_recarga">
		{{Form::open(array('id' => 'aidi', 'method' => 'post', 'route' => 'digitelrecargaconfirmar'))}}
		{{Form::select('servicio', array('DIGITEL PRE-PAGO' => 'DIGITEL PRE-PAGO'), null, array('id' => 'campo_registro2'))}}<br>
		{{Form::select('numero_digitel', array('0412' => '0412', '0212' => '0212', '0234' => '0234', '0235' => '0235', '0237' => '0237', '0238' => '0238', '0239' => '0239', '0240' => '0240', '0241' => '0241', '0242' => '0242', '0243' => '0243', '0244' => '0244', '0245' => '0245', '0246' => '0246', '0247' => '0247', '0248' => '0248', '0249' => '0249', '0251' => '0251', '0252' => '0252', '0253' => '0253', '0254' => '0254', '0255' => '0255', '0256' => '0256', '0257' => '0257', '0258' => '0258', '0259' => '0259', '0261' => '0261', '0262' => '0262', '0263' => '0263', '0264' => '0264', '0265' => '0265', '0266' => '0266', '0267' => '0267', '0268' => '0268', '0269' => '0269', '0271' => '0271', '0272' => '0272', '0273' => '0273', '0274' => '0274', '0275' => '0275', '0276' => '0276', '0277' => '0277', '0278' => '0278', '0279' => '0279', '0281' => '0281', '0282' => '0282', '0283' => '0283', '0284' => '0284', '0285' => '0285', '0286' => '0286', '0287' => '0287', '0288' => '0288', '0289' => '0289', '0291' => '0291', '0292' => '0292', '0293' => '0293', '0294' => '0294', '0295' => '0295'), Session::get('numero_digitel'), array('class' => 'pref_dig', 'id' => 'campo_registro5'))}}
		{{Form::text( 'numero_afiliado', Session::has('numero_digitel') ? Session::get('numero_afiliado') : null, array('pattern' => '.{7,7}', 'class' => 'validate[required] nuevocelular', 'id' => 'campo_registro3aa') )}}<br>
		<select id="campo_registro2" name="numero_afiliado" class="numafiliado">
			<option>SELECCIONE</option>
				@foreach ($numerillo as $numerillo)

				<?php 
				$selected = '';
				if( ! Session::has('numero_digitel') )
				{
					if( $numerillo->numero == Session::get('numero_afiliado') )
					{
						$selected = 'selected';
					}
				}
				?>

				<option value="{{$numerillo->numero}}" {{$selected}} >{{$numerillo->numero}} - {{$numerillo->alias}}</option>
				@endforeach
		</select><br>
		{{Form::text( 'monto', null, array('class' => 'validate[required],min[20],max[500] monnto', 'id' => 'campo_registro_a8'))}}<br>
		{{Form::select('metodo_pago', array('Cuenta de Banco' => 'Cuenta de Banco', 'Tarjeta de Crédito' => 'Tarjeta de Crédito', 'Código Promocional' => 'Código Promocional'), null, array('id' => 'campo_registro2', 'class' => 'validate[required],equals2[paagoo] selectmetodopago'))}}<br>
		{{Form::hidden('coodigoo', 12345, array('id' =>'coodigoo'))}}
		{{Form::hidden('pago', 'Código Promocional', array('id' =>'paagoo'))}}
		{{Form::text( 'codigo', null, array('class' => 'validate[required],equals[coodigoo] culo2', 'id' => 'campo_registro8', 'style' => 'display:none;') )}}<br>
	</div>
	<!--<div class="afiliacion_3" style="top:255px">
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
		</table>		
	</div>
	<div id="aux_recarga2">
		{{Form::text( 'numero_tarjeta', null, array('id' => 'campo_registro') )}}<br>
		{{Form::text( 'monto', null, array('id' => 'campo_registro9') )}}<br>
		{{Form::select('mes', array('0' => 'MES')) . Form::select('fecha', array('0' => 'FECHA'))}}<br>
		{{Form::select('banco_emisor', array('0' => ''), null, array('id' => 'campo_registro2'))}}<br>
		{{Form::text( 'nombre_impreso', null, array('id' => 'campo_registro') )}}<br>
	</div>
	<div id="check2">
		{{Form::checkbox('name', 'value', true)}}<span class="radio_check">Establecer como predeterminada</span>&nbsp;&nbsp;&nbsp;
		{{Form::checkbox('name', 'value')}}<span class="radio_check">Afiliar</span>
	</div>
	<div id="tdc">
		{{Form::radio('1', 'Visa')}}<img src="img/visa.png" style="position:relative;top:3px">
		{{Form::radio('2', 'Mastercard')}}<img src="img/mastercard.png" style="position:relative;top:3px">
		{{Form::radio('3', 'Amex')}}<img src="img/amex.png" style="position:relative;top:3px">
	</div>			
	<div id="num_cedula">
		V-22.035.112
	</div>-->
	<div id="notif">
		"Introduzca el monto deseado desde Bs. 20 hasta<br>500 en múltiplos de 10, Ej : 20, 30, 40, …490, 500”
	</div>
	<!--<div class="terms"></div>-->
	<div class="buttons_6" style="top: 211px;">
		{{Form::submit('', array('id' => 'boton_continuar')) . Form::close()}}&nbsp;&nbsp;&nbsp;<a href="{{URL::route( 'home2' )}}"><img src="img/cancelar_2.png"></a>
	</div>
</div><!--container_home_4-->
</div><!--container3-->
</div><!--container_reg-->
<script>
    $(document).ready(function(){
        $("#aidi").validationEngine('attach');
       });
</script>

{{$footer}}