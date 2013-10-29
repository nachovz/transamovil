<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>{{$title}}</title>
<script src="js/css_browser_selector.js" type="text/javascript"></script>
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
<link rel="stylesheet" href="css/print.css" type="text/css" media="print" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
<!--FONT-->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet' type='text/css'>
<!--FONT-->
<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
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
</script>
<link rel="stylesheet" type="text/css" href="css/ventanas-modales.css">
<link rel="stylesheet" type="text/css" href="{{asset('css/registro-wizard.css')}}" />
</head>

<body onload="MM_preloadImages('img/creatium_over.png')">
<body onload="MM_preloadImages('img/buttons/registro_over.jpg','img/buttons/ingresar_over.jpg','img/buttons/over_01.jpg','img/buttons/over_02.jpg','img/buttons/submenu_over_01.jpg','img/buttons/submenu_over_02.jpg','img/buttons/over_03.jpg','img/buttons/submenu_over_03.jpg','img/buttons/submenu_over_04.jpg','img/buttons/submenu_over_05.jpg','img/buttons/over_04.jpg','img/aliado.jpg')">

<div id="header_reg">
<div id="header2">
<div id="regist"> <a href="{{URL::route( 'logout' )}}"><img src="img/cerrar_sesion.png" alt="registro" width="104" height="23" id="registro" border="0" style="display:block"/></a></div><!--regist-->

<div class="user_session"><span style="font-family: 'Open Sans', sans-serif;font-size: 12px; color: #333; font-weight:bold">Bienvenido(a) {{Auth::user()->nombre . ' ' . Auth::user()->apellido}}</span><br><span style="font-family: 'Open Sans', sans-serif;font-size: 12px; color: #333;font-style:italic">TransaPIN:</span><span style="font-family: 'Open Sans', sans-serif;font-size: 12px; color: #333;font-weight:bold">582396</span></div>


<div id="logo"><a href="{{URL::route( 'home' )}}"><img src="img/logo_transparente.png" alt="TransaMóvil" width="170" height="91" id="TransaMovil" border="0" style="display:block"/></a></div><!--logo-->
<div class="user_last_login">Último Acceso: <span style="font-weight:bold;">{{date('d/m/Y',strtotime( 'now' ))}}<span></div>

</div><!--header2-->
</div><!--header-->

font-family: 'Open Sans', sans-serif; font-weight: bold;font-size: 12px