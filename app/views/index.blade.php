{{$header}}

<div id="container">
<div id="container2">
<div id="foto">
<div class="contenido">
    <div id="slides">
    <div class="slide">
    <a href="{{URL::route( 'transamovil' )}}"><img src="{{ asset('img/banner_home1.jpg') }}" width="945" height="380" border="0" style="display:block"/></a>
     </div>
     <div class="slide">
       <a href="{{URL::route( 'comofunciona' )}}"><img src="{{ asset('img/banner_home2.jpg') }}" width="945" height="380" border="0" style="display:block"/></a>
       </div>
        <a href="{{URL::route( 'parativentajas' )}}"><img src="{{ asset('img/banner_home3.jpg') }}" width="945" height="380" border="0" style="display:block"/></a>
        <div class="slide">
          <a href="{{URL::route( 'nuestrassoluciones' )}}">
          <img src="{{ asset('img/banner_home4.jpg') }}" width="945" height="380" border="0" style="display:block"/></a>
          </div>
          <div class="slide">
            <a href="{{URL::route( 'empresaventajas' )}}"><img src="{{ asset('img/banner_home5.jpg') }}" width="945" height="380" border="0" style="display:block"/></a>
           </div>
           
           <div class="slide">   
             <a href="{{URL::route( 'solucionesadaptables' )}}"> <img src="{{ asset('img/banner_home6.jpg') }}" width="945" height="380" border="0" style="display:block"/></a>
              </div>
    </div>
  </div>

</div><!--foto-->

<div id="submenuhome">

<a href="{{URL::route( 'transamovil' )}}" id="item"  >
<h1>01.</h1>
<div id="sub1" class="texto">¿Qué es<br />
 
<strong>TransaMóvil?</strong></div>
</a>

<a href="{{URL::route( 'comofunciona' )}}" id="item" >
<div class="linea"></div>
<h1>02.</h1>
<div id="sub2" class="texto">Acelera tu <strong>dinero</strong></div>
</a>
<a href="{{URL::route( 'parativentajas' )}}" id="item"  class="sub3">
<div class="linea"></div>
<h1>03.</h1>
<div id="sub3" class="texto"><strong>Rápido, Fácil y<br />
 seguro</strong></div>
</a>
<a href="{{URL::route( 'nuestrassoluciones' )}}" id="item" class="sub4">
<div class="linea"></div>
<h1>04.</h1>
<div id="sub4" class="texto">Acelera tu <strong>negocio</strong></div>
</a>
<a id="item" href="{{URL::route( 'empresaventajas' )}}" class="sub5"><div class="linea"></div><h1>05.</h1>

<div id="sub5" class="texto">Beneficios para tu <br />
<strong>empresa</strong></div></a>
<a id="item" href="{{URL::route( 'solucionesadaptables' )}}" class="sub6">
<div class="linea"></div>
<h1>06.</h1>
<div id="sub6" class="texto"><strong>Soluciones </strong>a tu <br />
medida</div></a>

</div><!--contenido-->

<div id="thumbs"><a href="{{URL::route( 'hagamosnegocio' )}}" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('aliados','','{{ asset('img/aliado.jpg') }}',1)"><img src="{{ asset('img/aliado.jpg') }}" width="450" height="256" id="aliados" border="0" style="display:block"/></a></div><!--thumbs-->
<div id="thumbs"><a href="{{URL::route( 'recarga' )}}" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('digitel','','{{ asset('img/recarga.jpg') }}',0)"><img src="{{ asset('img/recarga.jpg') }}" width="450" height="256" id="digitel" border="0" style="display:block"/></a></div><!--thumbs-->

</div><!--container2-->
</div><!--container-->

{{$footer}}