$(document).ready(function(){

	$('#boton_auxiliar_siguiente').live( 'click', wizard_next);
	$('#boton_auxiliar_anterior').live( 'click', wizard_prev);
	$('#boton_auxiliar_cancelar').live( 'click', wizard_cancel);
	$('#boton_auxiliar_cancelar_2').live( 'click', wizard_cancel);
	$('#boton_auxiliar_cerrar').live( 'click', wizard_cancel);
	$('#cierre-modal-confirmacion-registro').live( 'click', register_modal_close)

});

function wizard_cancel( e )
{
	window.location.replace("home");
}

function wizard_next( e )
{
	var boton = $(e.currentTarget);

	if( boton.val() == 1 )
	{
		//Validando que el campo email sea válido
		var email = $('#campo_registroa');

		if( ! email[0].checkValidity() || email.val() == '')
		{
			alert('Por favor ingresa un correo válido');
			return false;
		}

		//Verificando que el correo alterno sea válido
		var email_alterno = $('.registro_email_alterno');
		if( ! email_alterno[0].checkValidity() || email_alterno.val() == '')
		{
			alert('Por favor ingresa un correo alterno válido');
			return false;
		}

		$('#contenedor_registro_1').removeClass('active').addClass('inactive');
		$('#contenedor_registro_2').removeClass('inactive').addClass('active');		
	}
	else if( boton.val() == 2 )
	{
		//Verificando que la cédula sea válida
		var cedula = $('.registro_ced_pas');

		if( cedula.val() == '' )
		{
			alert('Por favor ingresa tu cédula');
			return false;
		}

		var nombre = $('.registro_nombre');

		if( nombre.val() == '')
		{
			alert('Por favor ingresa tu nombre');
			return false;			
		}

		var apellido = $('.registro_apellido');

		if( apellido.val() == '')
		{
			alert('Por favor ingresa tu apellido');
			return false;			
		}

		$('#contenedor_registro_2').removeClass('active').addClass('inactive');
		$('#contenedor_registro_3').removeClass('inactive').addClass('active');
	}
}

function wizard_prev( e )
{
	var boton = $(e.currentTarget);	

	if( boton.val() == 2 )
	{
		$('#contenedor_registro_1').removeClass('inactive').addClass('active');
		$('#contenedor_registro_2').removeClass('active').addClass('inactive');
	}
	else if( boton.val() == 3 )
	{
		$('#contenedor_registro_2').removeClass('inactive').addClass('active');
		$('#contenedor_registro_3').removeClass('active').addClass('inactive');
	}
}

function register_modal_close( e )
{	
	e.preventDefault();
	alert('Hola');
	$('#divOverlay').remove();
	$('.clsVentana').remove();
}