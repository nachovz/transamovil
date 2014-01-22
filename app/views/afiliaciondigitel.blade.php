{{$header}}
	<script>
    $(document).ready(function(){
        $("#afi").validationEngine('attach', {scroll: false});
       });
</script>
<script>
$(document).ready(function() {
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
<script src="{{asset('js/modal-modificar-afiliacion.js')}}"></script>
<div id="container_reg">
<div id="container3">
<div id="container_home3">
	<div id="mis_servicios"></div>
	<div id="volver_home"><a href="{{URL::route( 'home' )}}"><img src="img/volver_home.png"></a></div>
<div style="position:absolute;top: 323px;left: 232px;">
	<div class="servicio_texto_1" style="width: 228px;">NÚMEROS AFILIADOS AL SERVICIO</div>
	<div class="num_afiliados">
		<table id="tabla1">
			{{Form::open(array('method' => 'post'))}}
			<THEAD>
				<tr>
					<th>&nbsp;</th>
					<th>Servicio</th>
					<th>Número</th>
					<th>Alias</th>
				</tr>
			</THEAD>
			<TBODY>
				<?php $afiliaciones = Auth::user()->afiliaciones()->get()->all();?>
				@if( ! empty( $afiliaciones ) )
					<?php $i = 0;?>
					@foreach( $afiliaciones as $af )
					<tr>
						<td>{{Form::radio('afiliacion_id', $af->id, ($i++ == 0)? true:false )}}</td>
						<td>Digitel</td>
						<td>{{$af->numero}}</td>
						<td>{{$af->alias}}</td>
					</tr>
					@endforeach
				@else 
					<tr>
						<td>{{Form::radio('1', '1')}}</td>
						<td>No posee número afiliados</td>
						<td>-</td>
						<td>-</td>
					</tr>
				@endif
			</TBODY>
			{{Form::close()}}
		</table>

	</div>
	<div class="buttons_1">

        <!--[if IE 8]>
            <img src="img/modificar.png" class="img_space clsVentanaModificarAfiliacionIe">
            <a id="hackIeDelete" href="{{ URL::to('/modal/afiliacionDigitelEliminarIe') }}">
                <img src="img/eliminar.png" id="deleteNumber"/>
            </a>
        <![endif]-->
        <!--[if !IE 8]><!-->
            <img src="img/modificar.png" class="img_space clsVentanaModificarAfiliacion">
            <img src="img/eliminar.png" class="clsVentanaEliminarAfiliacion">
        <!--<![endif]-->
   </div>
</div>
<div style="position:relative">
   <div class="servicio_texto_4">INGRESA LOS DATOS PARA AFILIAR NUEVOS NÚMEROS AL SERVICIO:</div>
   <div class="logo_digitel"></div>
   <div class="afiliacion_1">
       <table id="tabla_2">
           <tr>
               <td>SERVICIO:</td>
           </tr>
           <tr>
               <td style="background-color:rgb(0,137,150);">NÚMERO DIGITEL <span id="ffs">(Móvil, Fijo o BAM):</span></td>
           </tr>
           </tr>
               <td>ALIAS:</td>
           </tr>
       </table>
   </div>
   <div class="afiliacion_2">
       {{Form::open( array( 'id' => 'afi', 'method' => 'post', 'route' => 'afiliaciondigitelconfirmar' ) )}}
       {{Form::select('servicio', array('0' => 'DIGITEL PRE-PAGO'), null, array('id' => 'campo_registro6'))}}<br>
       {{Form::select('prefijo', array('0412' => '0412', '0212' => '0212', '0234' => '0234', '0235' => '0235', '0237' => '0237', '0238' => '0238', '0239' => '0239', '0240' => '0240', '0241' => '0241', '0242' => '0242', '0243' => '0243', '0244' => '0244', '0245' => '0245', '0246' => '0246', '0247' => '0247', '0248' => '0248', '0249' => '0249', '0251' => '0251', '0252' => '0252', '0253' => '0253', '0254' => '0254', '0255' => '0255', '0256' => '0256', '0257' => '0257', '0258' => '0258', '0259' => '0259', '0261' => '0261', '0262' => '0262', '0263' => '0263', '0264' => '0264', '0265' => '0265', '0266' => '0266', '0267' => '0267', '0268' => '0268', '0269' => '0269', '0271' => '0271', '0272' => '0272', '0273' => '0273', '0274' => '0274', '0275' => '0275', '0276' => '0276', '0277' => '0277', '0278' => '0278', '0279' => '0279', '0281' => '0281', '0282' => '0282', '0283' => '0283', '0284' => '0284', '0285' => '0285', '0286' => '0286', '0287' => '0287', '0288' => '0288', '0289' => '0289', '0291' => '0291', '0292' => '0292', '0293' => '0293', '0294' => '0294', '0295' => '0295'), Session::get('prefijo'), array('id' => 'campo_registro5'))}}
       {{Form::text( 'numero', Session::get('numero'), array('class' => 'validate[required, custom[integer], minSize[7]]', 'id' => 'campo_registro333', 'maxlength' => 7) )}}<br>
       {{Form::text( 'alias', Session::get('alias'), array('class' => 'validate[required]', 'id' => 'campo_registro7', 'maxlength' => 10) )}}
   </div>
   <div class="buttons_5">
       {{Form::submit('', array('id' => 'boton_continuar', 'class' => 'img_space')) . Form::close()}}&nbsp;<a href="{{URL::route( 'home' )}}" id="fakinie8"><img src="img/cancelar_2.png"></a>
   </div>
</div>
</div><!--container_home-->
</div><!--container3-->
</div><!--container_reg-->

{{$footer}}