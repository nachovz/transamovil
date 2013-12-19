// This method is called right before the ajax form validation request
// it is typically used to setup some visuals ("Please wait...");
// you may return a false to stop the request 
function beforeCall(form, options){
	if (window.console) 
	console.log("Right before the AJAX form validation call");
	return true;
}
    
// Called once the server replies to the ajax form validation request
function ajaxValidationCallback(status, form, json, options){
	if (window.console) 
	console.log(status);
        
	if (status === true) {
		alert("the form is valid!");
		// uncomment these lines to submit the form to form.action
		// form.validationEngine('detach');
		// form.submit();
		// or you may use AJAX again to submit the data
	}
}

var promocional = $('#campo_registro8');

$(document).ready(function(){

	$("#aidi").validationEngine('attach', {scroll: false});

	$("#aidi").validationEngine({
				ajaxFormValidation: true,
				ajaxFormValidationMethod: 'post',
				onAjaxFormComplete: ajaxValidationCallback
			});


	//$('#boton_continuar').on( 'click', continuar);

});

function valPromocional(field, rules, i, options){

	if (field.val() != '')
	{

		//LLAMADA AJAX PARA REALIZAR REGISTRO
		$.ajax({
			type: 'GET',
			url: $('#campo_registro8').data('url'),
			data: $( "#aidi" ).serialize(),
			dataType: 'json',
			success: function (data) {
				if(data.success == false){
					$('input[name=codigo').validationEngine('showPrompt', '* Codigo inválido', 'error');
					return options.allrules.validate2fieldsPromocional.alertText;
				}
			}
		});
	}
}

function continuar( e )
{
	//e.preventDefault();
	if ( $("#aidi").validationEngine('validate') )
	{
		alert('Valida form...');
		alert($('#campo_registro8').validationEngine('validate'));
		alert(valPro);
		
		if ( $('#campo_registro8').validationEngine('validate') )
		{
			alert('Valida campos...');
			$("#aidi").submit();
		}	
	}

	return false;
}
