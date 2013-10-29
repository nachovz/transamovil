$(document).ready(function(){

	$('#boton_auxiliar_siguiente').live( 'click', wizard_next);
	$('#boton_auxiliar_anterior').live( 'click', wizard_prev);
	$('#boton_auxiliar_cancelar').live( 'click', wizard_cancel);
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
		//Validando que el campo email alterno sea válido
		var email_email = document.getElementById('campo_registroa');
		if( email_email.checkValidity() )
		{
			$('#contenedor_registro_1').removeClass('active').addClass('inactive');
			$('#contenedor_registro_2').removeClass('inactive').addClass('active');			
		}
		else
		{
			//Acá se sustituye el alert por cualquier acción que se quiera hacer para la validación
			alert('El email es obligatorio');
		}
	}
	else if( boton.val() == 2 )
	{
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