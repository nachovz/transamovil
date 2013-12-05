<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>{{$title}}</title>

<link rel="icon" href="img/favicon.ico">
<link rel="shortcut icon" href="img/favicon.ico">
<link rel="apple-touch-icon" href="img/favicon.ico">

<META NAME="Description" CONTENT="Sistema que permite recibir pagos, recargar tu celular, pagar servicios, comprar y hacer transferencias a otras personas, todo a través de tu teléfono celular."><!--200 cws-->
<META NAME="Keywords" CONTENT="Pago, celular, ewallet, caracas, concreteras en caracas"><!--900 cws-->
<META NAME="Author" CONTENT="Creatium Comuninacion Visual">
<META NAME="Geography" CONTENT="Venezuela">
<META NAME="Language" CONTENT="Spanish">
<META NAME="copyright" CONTENT="Todos los derechos reservados 2013">

<!--FONT-->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet' type='text/css'>
<!--FONT-->
<link href="css/style.css" rel="stylesheet" type="text/css" />
<!--FONT-->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet' type='text/css'>
<!--FONT-->
<script src="js/jquery-1.9.1.min.js"></script>
<script src="js/jquery.slides.min.js"></script>
<script>
    $(function() {
      $('#slides').slidesjs({
        width: 945,
        height: 380,
        navigation: false,
		play: {
          active: false,
          auto: true,
          interval: 6000,
          swap: true
        }
		,
		  callback: {
          loaded: function(number) {
            // Use your browser console to view log
         //   console.log('SlidesJS: Loaded with slide #' + number);
			$('#sub' + number).addClass("activo");
            // Show start slide in log
          //  $('#slidesjs-log .slidesjs-slide-number').text(number);
          },
          start: function(number) {
            // Use your browser console to view log
            console.log('SlidesJS: Start Animation on slide #' + number);
			 $('#sub1').removeClass("activo");
			  $('#sub2').removeClass("activo");
			   $('#sub3').removeClass("activo");
			   $('#sub4').removeClass("activo");
			   $('#sub5').removeClass("activo");
			    $('#sub6').removeClass("activo");
          },
          complete: function(number) {
            // Use your browser console to view log
            //console.log('SlidesJS: Animation Complete. Current slide is #' + number);

            // Change slide number on animation complete
            
			$('#sub' + number).addClass("activo");
			
          }
        }
      });
    });
  </script>
<style type="text/css">
  #slides {
      display: none
    }

    #slides .slidesjs-navigation {
      margin-top:3px;
    }

    #slides .slidesjs-previous {
      margin-right: 5px;
      float: left;
    }

    #slides .slidesjs-next {
      margin-right: 5px;
      float: left;
    }

    .slidesjs-pagination {
      margin: -30px 400px;
	  position:absolute;
      list-style: none;
	  z-index:10000;
    }

    .slidesjs-pagination li {
      float: left;
      margin: 0 1px;
    }

    .slidesjs-pagination li a {
      display: block;
      width: 13px;
      height: 0;
      padding-top: 13px;
      background-image: url(img/pagination.png);
      background-position: 0 0;
      float: left;
      overflow: hidden;
    }

    .slidesjs-pagination li a.active,
    .slidesjs-pagination li a:hover.active {
      background-position: 0 -13px
    }

    .slidesjs-pagination li a:hover {
      background-position: 0 -26px
    }

    #slides a:link,
    #slides a:visited {
      color: #333
    }

    #slides a:hover,
    #slides a:active {
      color: #9e2020
    }

    .navbar {
      overflow: hidden
    }
  </style>
  <style type="text/css">
a:link {
	color: #333333;
	text-decoration: none;
}
a:visited {
	text-decoration: none;
	color: #333333;
}
a:hover {
	text-decoration: none;
	color: #008C99;
}
a:active {
	text-decoration: none;
	color: #333333;
}
</style>
<script type="text/javascript">
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}

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
})
</script>
<link rel="stylesheet" type="text/css" href="css/ventanas-modales.css">
<link rel="stylesheet" type="text/css" href="{{asset('css/registro-wizard.css')}}" />
</head>

<body onload="MM_preloadImages('img/creatium_over.png')">
<body onload="MM_preloadImages('img/buttons/registro_over.jpg','img/buttons/ingresar_over.jpg','img/buttons/over_01.jpg','img/buttons/over_02.jpg','img/buttons/submenu_over_01.jpg','img/buttons/submenu_over_02.jpg','img/buttons/over_03.jpg','img/buttons/submenu_over_03.jpg','img/buttons/submenu_over_04.jpg','img/buttons/submenu_over_05.jpg','img/buttons/over_04.jpg','img/aliado.jpg')">

<div id="header">
<div id="header2">
<div id="regist"> <a href="{{URL::route( 'registro' )}}" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('registro','','img/buttons/registro_over.jpg',1)"><img src="img/buttons/registro_up.jpg" alt="registro" width="80" height="22" border="0" style="display:block"/></a></div><!--regist-->


<!--<div id="registt">
  <div id="farm">
    {{Form::open(array('route' => 'login', 'method' => 'post')) . Form::email( 'email', Input::old('email'), array('placeholder'=>'Correo Electronico') )}}&nbsp;&nbsp;{{Form::password( 'password', array('placeholder'=>'Password') )}}
  </div> 
  {{Form::submit('', array('id' => 'boton_registrar')) . Form::close()}}
</div>-->

<div id="regist">
  {{Form::open(array('route' => 'login', 'method' => 'post'))}}
<?php $message = Session::get('message'); ?>



@if( $errors->has( 'email' ) )
      @foreach( $errors->get( 'email' ) as $error )
        <label for="email" class="error">{{$error}}</label>
      @endforeach
@endif

{{Form::label( 'email', 'EMAIL: ', array('id' => 'labelheaderemail')) . Form::email( 'email', Input::old('email'), array('placeholder'=>'Correo Electronico', 'class' => 'validate[required]', 'id' => 'fix','class' => 'validate[required]', 'required', 'x-moz-errormessage' => 'Introduzca su correo', 'title' => 'Introduzca su correo') )}}

@if( $errors->has( 'password' ) )
      @foreach( $errors->get( 'password' ) as $error )
      <label for="password" class="error">{{$error}}</label>
      @endforeach
@endif

&nbsp;&nbsp;{{Form::label( 'password', 'Contraseña: ', array('id' => 'labelheaderemail')) . Form::password( 'password', array('placeholder'=>'Password', 'class' => 'validate[required]', 'id' => 'fix', 'required', 'x-moz-errormessage' => 'Introduzca su clave', 'title' => 'Introduzca su clave') ) . Form::submit('', array('id' => 'boton_registrar')) . Form::close()}}

<div id="forgot_pwd"><a href="{{URL::route( 'index' )}}">Olvidé mi contraseña</a></div>
<div id="forgot_mail"><a href="{{URL::route( 'index' )}}">Olvidé mi correo</a></div>
@if( isset( $message ) && ! empty( $message ) )
    <div id="error_message">{{$message}}</div>
    <?php unset( $message );?>
@endif
</div>

<div id="logo"><a href="{{URL::route( 'index' )}}" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('TransaMovil','','img/logo.jpg',0)"><img src="img/logo.jpg" alt="TransaMóvil" width="170" height="91" id="TransaMovil" border="0" style="display:block"/></a></div><!--logo-->

<div id="menu"><!-- The strange spacing herein prevents an IE6 whitespace bug. -->
      <ul id="barra">
       <li><a href="{{URL::route( 'transamovil' )}}" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('que es TM','','img/buttons/over_01.jpg',1)"><img src="img/buttons/up_01.jpg" width="175" height="55" id="que es TM" border="0" style="display:block"/></a></li><!--  TM -->
       
        <li><a href="#" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('PARATI','','img/buttons/over_02.jpg',1)"><img src="img/buttons/up_02.jpg" width="175" height="55" id="PARATI" border="0" style="display:block"/></a>
       <ul>
               <li><a href="{{URL::route( 'comofunciona' )}}" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('funciona','','img/buttons/submenu_over_01.jpg','PARATI','','img/buttons/over_02.jpg',1)"><img src="img/buttons/submenu_up_01.jpg" width="175" height="25" id="funciona" border="0" style="display:block"/></a></li>
               <li><a href="{{URL::route( 'parativentajas' )}}" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('ptventajas','','img/buttons/submenu_over_02.jpg','PARATI','','img/buttons/over_02.jpg',1)"><img src="img/buttons/submenu_up_02.jpg" width="175" height="25" id="ptventajas" border="0" style="display:block"/></a></li>
         </ul>  </li> <!-- PARA TI -->

      
        <li><a href="#" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('empresa','','img/buttons/over_03.jpg',1)"><img src="img/buttons/up_03.jpg" width="175" height="55" id="empresa" border="0" style="display:block"/></a>
       <ul>
               <li><a href="{{URL::route( 'nuestrassoluciones' )}}" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('soluciones','','img/buttons/submenu_over_03.jpg','empresa','','img/buttons/over_03.jpg',1)"><img src="img/buttons/submenu_up_03.jpg" width="175" height="25" id="soluciones" border="0" style="display:block"/></a></li>
               <li><a href="{{URL::route( 'empresaventajas' )}}" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('pteventajas','','img/buttons/submenu_over_04.jpg','empresa','','img/buttons/over_03.jpg',1)"><img src="img/buttons/submenu_up_04.jpg" width="175" height="25" id="pteventajas" border="0" style="display:block"/></a></li>
               <li><a href="{{URL::route( 'solucionesadaptables' )}}" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('solucionesa','','img/buttons/submenu_over_05.jpg','empresa','','img/buttons/over_03.jpg',1)"><img src="img/buttons/submenu_up_05.jpg" width="175" height="25" id="solucionesa" border="0" style="display:block"/></a></li>
        </ul>  </li><!-- PARA TU EMPRESA -->
         
        <li><a href="{{URL::route( 'hagamosnegocio' )}}" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('negocio','','img/buttons/over_04.jpg',1)"><img src="img/buttons/up_04.jpg" width="175" height="55" id="negocio" border="0" style="display:block"/></a></li><!-- hagamosbegocio -->
      </ul></div><!--menu-->
</div><!--header2-->
</div><!--header-->