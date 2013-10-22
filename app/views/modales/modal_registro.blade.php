<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<link rel="stylesheet" type="text/css" href="{{asset('css/ventanas-modales.css')}}">
	</head>
	<body>
		<div class="modal_titulo_1_wrapper">
			<span class="modal_titulo_1">REGISTRO EXITOSO</span>
		</div>
		<div class="modal_texto_1_wrapper">
			<span class="modal_texto_1">SE ENVIARON LOS DATOS DE CONFIRMACIÓN CORRECTAMENTE A:<br>
			<span class="modal_texto_1_bold">{{$email}}</span></span>
		</div>
		<div class="modal_datos_1_wrapper">
			<div class="modal_datos_1a">
				<span class="modal_datos_1">
					TU USUARIO ES: <span class="modal_datos_1_bold">{{$email}}</span><br>
					Y TU TRANSA-PIN: <span class="modal_datos_1_bold">#582396</span>
				</span>
			</div>
		</div>
		<div class="modal_texto_2_wrapper">
			<span class="modal_texto_1_bold">BIENVENIDO A TRANSAMÓVIL, ¡SU USUARIO HA SIDO REGISTRADO CON ÉXITO!</span>
		</div>
		<div class="modal_texto_3_wrapper">
			<span class="modal_texto_2">TU USUARIO ES TU NOMBRE DE IDENTIFICACIÓN PARA INGRESAR AL SISTEMA</span><br>
			<span class="modal_texto_2">TU TRANSAPIN ES TU NUMERO DE IDENTIFICACIÓN DENTRO DE TRANSAMÓVIL</span><br>
			<span class="modal_texto_2">Y EL CUAL PUEDES COMPARTIR CON OTROS USUARIOS DEL SISTEMA PARA REALIZAR TRANSACCIONES CON MÁXIMA SEGURIDAD.</span>
		</div>
		<div class="modal_texto_4_wrapper">
			<span class="modal_texto_2">PARA MAYOR SEGURIDAD EN TUS TRANSACCIONES TE INVITAMOS</span><br>
			<span class="modal_texto_2">A COMPLETAR LOS DATOS SIGUIENTES</span>
		</div>	
	</body>
</html>