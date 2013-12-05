//Campos
var email = $('#campo_registroa');
var email_check = $('#campo_registro');
//var email_alterno = $('.registro_email_alterno');
var password = $('#password_registro');
var password_confirm = $('#password_confirm');
var answer = $('#respuesta_registro');
var telefono = $('#telefono_registro');
var alterno = $('#email_alterno');

$(document).ready(function(){

	$("#registro-form").validationEngine();

	$('#boton_auxiliar_siguiente').on( 'click', wizard_next);
	$('#boton_auxiliar_anterior').on( 'click', wizard_prev);
	$('#boton_auxiliar_cancelar').on( 'click', wizard_cancel);
	$('#boton_auxiliar_cancelar_2').on( 'click', wizard_cancel);
	$('#boton_auxiliar_cerrar').on( 'click', wizard_cancel);
	$('#cierre-modal-confirmacion-registro').on( 'click', register_modal_close);

});

function sameEmail(field, rules, i, options){
	if (email_check.val() != email.val()){
		return options.allrules.validate2fieldsEmail.alertText;
	}
}

function samePassword(field, rules, i, options){
	if (password_confirm.val() != password.val()){
		return options.allrules.validate2fieldsPassword.alertText;
	}
}

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

		if (!email.validationEngine('validate') && !email_check.validationEngine('validate') && !password.validationEngine('validate') && !password_confirm.validationEngine('validate') && !answer.validationEngine('validate') && !telefono.validationEngine('validate') && !alterno.validationEngine('validate')) {
			$('#contenedor_registro_1').removeClass('active').addClass('inactive');
			$('#contenedor_registro_2').removeClass('inactive').addClass('active');	
		};

		// if( ! email[0].checkValidity() || email.val() == '')
		// {
		// 	alert('Por favor ingresa un correo válido');
		// 	return false;
		// }

		//Validando que la verificación de correo coincida con el correo
		

		// if(email_check.val() != email.val())
		// {
		// 	alert('La confirmación de correo no coincide');
		// 	return false;	
		// }

		//Verificando que el correo alterno sea válido
		
		// if( ! email_alterno[0].checkValidity() || email_alterno.val() == '')
		// {
		// 	alert('Por favor ingresa un correo alterno válido');
		// 	return false;
		// }

		// $('#contenedor_registro_1').removeClass('active').addClass('inactive');
		// $('#contenedor_registro_2').removeClass('inactive').addClass('active');		
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

		if( ! $('#registro-terminos-check').prop('checked') )
		{
			alert('Debes aceptar los términos y condiciones');
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