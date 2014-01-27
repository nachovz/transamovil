{{$header}}
<div id="container_reg">
<div id="container3">
<div id="container_home4">
@if ($meta['wrapper_data']['0'] == 'HTTP/1.1 200 OK')
    <!-- <?php echo $resp->{'codigo'}."HOLA"; ?> -->
    @if ($resp->{'codigo'} == '00')
        <div class="modal_transaccion_exitosa_titulo_wrapper">
            <span class="modal_transaccion_exitosa_titulo">RECARGA EXITOSA</span>
        </div>
        <div class="modal_transaccion_exitosa_datos_wrapper">
            <div class="modal_transaccion_exitosa_datos">
                <table style="width: 339px;">
                    <tr>
                        <td>
                            <span class="modal_transaccion_exitosa_contenido">MONTO RECARGADO:</span>
                        </td>
                        <td style ="text-align:right">
                            <span class="modal_transaccion_exitosa_contenido2">{{$monto}} Bs.</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span class="modal_transaccion_exitosa_contenido">NÚMERO RECARGADO:</span>
                        </td>
                        <td style ="text-align:right">
                            <span class="modal_transaccion_exitosa_contenido2"> {{$prefijo}} {{$numero_afiliado}}
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span class="modal_transaccion_exitosa_contenido">FECHA DE LA RECARGA:</span>
                        </td>
                        <td style ="text-align:right">
                            <span class="modal_transaccion_exitosa_contenido2">{{date("j/n/Y")}}</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span class="modal_transaccion_exitosa_contenido">HORA DE LA RECARGA:</span>
                        </td>
                        <td style ="text-align:right">
                            <span class="modal_transaccion_exitosa_contenido2">{{date("H:i:s")}}</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span class="modal_transaccion_exitosa_contenido">MÉTODO DE PAGO:</span>
                        </td>
                        <td style ="text-align:right">
                            <span class="modal_transaccion_exitosa_contenido2">{{$metodo_pago}}</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span class="modal_transaccion_exitosa_contenido">N° CONFIRMACIÓN:</span>
                        </td>
                        <td style ="text-align:right">
                            <span class="modal_transaccion_exitosa_contenido2"><?php echo $resp->{'codtrans'}; ?></span>
                        </td>
                    </tr>
                    <!-- <tr>
                        <td>
                            <span class="modal_transaccion_exitosa_contenido">N° CONFIRMACIÓN DIGITEL:</span>
                        </td>
                        <td style ="text-align:right">
                            <span class="modal_transaccion_exitosa_contenido2">0566009</span>
                        </td>
                    </tr> -->
                </table>
            </div>
        </div>
        <div class="modal_transaccion_exitosa_texto1_wrapper">
            <span class="transaccion_exitosa_texto_1">Para mayor información llame al 121 desde su Digitel ó 0412 9121121</span>
        </div>

        <?php	$afiliacion = Auth::user()->afiliaciones()->where('numero', '=', $prefijo . $numero_afiliado)->get()->first();?>
        @if( $afiliacion == null )
        <div style="width: 264px;height: 21px;margin: 0 auto;" id="jiji"><input type="checkbox" class="checkie"><span class="transaccion_exitosa_texto_1 check">Desea guardar en su lista de números afiliados:</span></div>
        <div class="modal_transaccion_exitosa_check" style="display:none">
            {{Form::open( array( 'url' => '/modal/afiliacionDigitelCrear', 'method' => 'post' ) )}}
            <span class="transaccion_exitosa_texto_1">{{Form::label('alias', 'Alias: ') . Form::text('alias', null, array('maxlength' => 10))}}</span>
            {{Form::hidden('numero', $prefijo . $numero_afiliado)}}
            {{Form::submit('', array('style' => 'background-image:url("img/afiliar.png");width: 62px;height: 18px;border: 0;'))}}
            {{Form::close()}}
        </div>
        @endif

    @elseif ($resp->{'codigo'} == '05')
        <div class="modal_transaccion_exitosa_titulo_wrapper noprint">
            <span class="modal_transaccion_exitosa_titulo">EN ESTE MOMENTO NO PODEMOS PROCESAR SU SOLICITUD.<br/> POR FAVOR COMUNÍQUESE CON EL 121.</span>
        </div>
    @elseif ($resp->{'codigo'} == '07')
        <div class="modal_transaccion_exitosa_titulo_wrapper">
            <span class="modal_transaccion_exitosa_titulo">EN ESTE MOMENTO NO PODEMOS PROCESAR SU SOLICITUD. <br/> POR FAVOR COMUNÍQUESE CON EL 121.</span>
        </div>
    @elseif ($resp->{'codigo'} == '09')
        <div class="modal_transaccion_exitosa_titulo_wrapper">
            <span class="modal_transaccion_exitosa_titulo">EN ESTE MOMENTO NO PODEMOS PROCESAR SU SOLICITUD. <br/> POR FAVOR COMUNÍQUESE CON EL 121.</span>
        </div>
    @elseif ($resp->{'codigo'} == '13')
        <div class="modal_transaccion_exitosa_titulo_wrapper">
            <span class="modal_transaccion_exitosa_titulo">EN ESTE MOMENTO NO PODEMOS PROCESAR SU SOLICITUD. <br/> POR FAVOR COMUNÍQUESE CON EL 121.</span>
        </div>
    @elseif ($resp->{'codigo'} == '19')
        <div class="modal_transaccion_exitosa_titulo_wrapper">
            <span class="modal_transaccion_exitosa_titulo">EN ESTE MOMENTO NO PODEMOS PROCESAR SU SOLICITUD. <br/> SU GSM NO CUMPLE LAS CONDICIONES.</span>
        </div>
    @elseif ($resp->{'codigo'} == '21')
        <div class="modal_transaccion_exitosa_titulo_wrapper">
            <span class="modal_transaccion_exitosa_titulo">EN ESTE MOMENTO NO PODEMOS PROCESAR SU SOLICITUD. <br/> POR FAVOR INTENTE MÁS TARDE.</span>
        </div>
    @elseif ($resp->{'codigo'} == '99')
        <div class="modal_transaccion_exitosa_titulo_wrapper">
            <span class="modal_transaccion_exitosa_titulo">EN ESTE MOMENTO NO PODEMOS PROCESAR SU SOLICITUD. <br/> POR FAVOR INTENTE MÁS TARDE.</span>
        </div>
    @else
        <div class="modal_transaccion_exitosa_titulo_wrapper">
            <span class="modal_transaccion_exitosa_titulo">EN ESTE MOMENTO NO PODEMOS PROCESAR SU SOLICITUD. <br/> POR FAVOR INTENTE MÁS TARDE.</span>
        </div>
    @endif
@else
    @if($resp->codigo == 21)
        <div class="modal_transaccion_exitosa_titulo_wrapper">
            <span class="modal_transaccion_exitosa_titulo">TRANSACCION FALLIDA. NO PUDO REALIZARSE LA RECARGA, POR FAVOR INTENTE MAS TARDE.</span>
        </div>
    @else
        <div class="modal_transaccion_exitosa_titulo_wrapper">
            <span class="modal_transaccion_exitosa_titulo">TRANSACCION FALLIDA. NO PUDO REALIZARSE LA RECARGA, POR FAVOR INTENTE MAS TARDE.</span>
        </div>
    @endif
@endif

<div class="modal_transaccion_botones_new fix_recarga">
    <a href="{{URL::route( 'home' )}}">
        {{ HTML::image('img/aceptar_ovalo.png') }}
    </a>&nbsp;&nbsp;
    <a href="javascript:window.print()">
        {{ HTML::image('img/imprimir.png') }}
    </a>&nbsp;&nbsp;
    <a href="{{URL::route( 'digitelrecarga' )}}" >
        {{ HTML::image('img/realizar_otra_recarga.png') }}
    </a>


</div>

    </div></div></div>
<script>
    $(document).ready(function(){
        $('.checkie').click(function(){
            if (this.checked) {
                $('.modal_transaccion_exitosa_check').show()
            }
            else
            {
                $('.modal_transaccion_exitosa_check').hide()
            }
        });

    });
</script>
{{$footer}}