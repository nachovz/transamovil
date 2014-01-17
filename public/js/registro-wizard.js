//Campos
var email = $('#campo_registroa');
var email_check = $('#campo_registro');
//var email_alterno = $('.registro_email_alterno');
var password = $('#password_registro');
var password_confirm = $('#password_confirm');
var answer = $('#respuesta_registro');
var telefono = $('#telefono_registro');
var alterno = $('#email_alterno');

var cedula = $('#cedula_registro');
var nombre = $('#nombre_registro');
var apellido = $('#apellido_registro');
var nacimiento = $('#fecha_registro');
var terminos = $('#registro-terminos-check');
var pais = $('#pais_registro');
var estado = $('#estado_registro');
var municipio = $('#municipio_registro');
var ciudad = $('#ciudad_registro');
var direccion = $('#direccion_registro');
var habitacion = $('#telefono_hab_registro');
var oficina = $('#telefono_ofi_registro');


$(document).ready(function(){

	$("#registro-form").validationEngine();

	$('.boton_auxiliar_siguiente').on( 'click', wizard_next);
	$('#boton_auxiliar_anterior').on( 'click', wizard_prev);
	$('#boton_auxiliar_cancelar').on( 'click', wizard_cancel);
	$('#boton_auxiliar_cancelar_2').on( 'click', wizard_cancel);
	$('#boton_auxiliar_cerrar').on( 'click', wizard_cancel);
	$('#cierre-modal-confirmacion-registro').on( 'click', register_modal_close);

	$('#captcha_img').on({
    'click': function(){

		//LLAMADA AJAX PARA REALIZAR REGISTRO
		$.ajax({
			type: 'GET',
			url: $('#captcha_img').data('urlPost'),
			data: null,
			dataType: 'text',
			success: function (data) {
				$('#captcha_img').attr('src',data);
			}
		});
    }
});

    var loadStates=function(){
        if($('#pais_registro').val()!=''){
            $.ajax({
                type: 'GET',
                url: $('#estado_registro').data('url'),
                data:{'country_id':$('#pais_registro').val()},
                dataType: 'json',
                success: function(data) {
                    var $temp=$('<div/>');

                    $temp.append(
                        $('<option/>',{value:''}).html('Seleccione')
                    );

                    if('states' in data){
                        for(var i=0;i<data['states'].length;i++){
                            $temp.append(
                                $('<option/>',{value:data['states'][i].id}).html(data['states'][i].name)
                            );
                        }
                    }

                    $('#estado_registro').html($temp.html());
                },
                error: function(response) {
                }
            });
        }
    };

    var resetLocation=function(){
        var $temp=$('<div/>');

        $temp.append(
            $('<option/>',{value:''}).html('Seleccione')
        );
        $('#ciudad_registro').html($temp.html());
        $('#municipio_registro').html($temp.html());
    };

    $('#pais_registro').on('change',function(){
        loadStates();
    });

    $('#estado_registro').on('change',function(){
        if($(this).val()!=''){
            $.ajax({
                type: 'GET',
                url: $('#ciudad_registro').data('url'),
                data:{'state_id':$(this).val()},
                dataType: 'json',
                success: function(data) {
                    var $temp=$('<div/>');

                    $temp.append(
                        $('<option/>',{value:''}).html('Seleccione')
                    );

                    if('cities' in data){
                        for(var i=0;i<data['cities'].length;i++){
                            $temp.append(
                                $('<option/>',{value:data['cities'][i].id}).html(data['cities'][i].name)
                            )
                        }
                    }

                    $('#ciudad_registro').html($temp.html());
                },
                error: function(response) {
                }
            });

            $.ajax({
                type: 'GET',
                url: $('#municipio_registro').data('url'),
                data:{'state_id':$(this).val()},
                dataType: 'json',
                success: function(data) {
                    var $temp=$('<div/>');

                    $temp.append(
                        $('<option/>',{value:''}).html('Seleccione')
                    );

                    if('townships' in data){
                        for(var i=0;i<data['townships'].length;i++){
                            $temp.append(
                                $('<option/>',{value:data['townships'][i].id}).html(data['townships'][i].name)
                            )
                        }
                    }
                    $('#municipio_registro').html($temp.html());
                },
                error: function(response) {
                }
            });
        }else{
            resetLocation();
        }
    });

    loadStates();
    resetLocation();
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

function notEqualEmail(field,rules,i,options){
    if(alterno.val()==email.val()){
        return options.allrules.notEqualEmail.alertText;
    }
}

function emailUnique(field,rules,i,options){
    var error = JSON.parse($.ajax({
        type: 'GET',
        url: email.data('urlValidation'),
        data:{'email':email.val()},
        dataType: 'json',
        async:false,
        success: function(data) {

        },
        error: function(response) {
        }
    }).responseText).message;

    if (error!=''){
        return error;
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
		}
		//$('#contenedor_registro_1').removeClass('active').addClass('inactive');
	    //$('#contenedor_registro_2').removeClass('inactive').addClass('active');

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
		// var cedula = $('.registro_ced_pas');

		// if( cedula.val() == '' )
		// {
		// 	alert('Por favor ingresa tu cédula');
		// 	return false;
		// }

		// var nombre = $('.registro_nombre');

		// if( nombre.val() == '')
		// {
		// 	alert('Por favor ingresa tu nombre');
		// 	return false;			
		// }

		// var apellido = $('.registro_apellido');

		// if( apellido.val() == '')
		// {
		// 	alert('Por favor ingresa tu apellido');
		// 	return false;			
		// }

		// if( ! $('#registro-terminos-check').prop('checked') )
		// {
		// 	alert('Debes aceptar los términos y condiciones');
		// 	return false;
		// }
        if(navigator.userAgent.indexOf('MSIE')!=-1){
            $('.hide-in-ie').addClass('hide');
        }

		if (!cedula.validationEngine('validate')
			 && !nombre.validationEngine('validate')
			 && !apellido.validationEngine('validate')
			 && !nacimiento.validationEngine('validate')
			 && !terminos.validationEngine('validate')
			 && !pais.validationEngine('validate') 
			 && !estado.validationEngine('validate') 
			 && !municipio.validationEngine('validate')
			 && !ciudad.validationEngine('validate') 
			 && !direccion.validationEngine('validate')
			 && !habitacion.validationEngine('validate')
			 && !oficina.validationEngine('validate')) 
		{
			//LLAMADA AJAX PARA REALIZAR REGISTRO
			$.ajax({
                type: 'POST',
                url: $('#storeRegistry').data('urlPost'),
                data: $( "#registro-form" ).serialize(),
                dataType: 'json',
                success: function( data ) {
                    //obtenemos la pagina que queremos cargar en la ventana y el titulo
                    //var strPagina=$(this).attr('href'), strTitulo=$(this).attr('rel');
                    var strPagina=$('#storeRegistry').data('urlModal')+'/'+ email.val();

                    //creamos la nueva ventana para mostrar el contenido y la capa para el titulo
                    var $objVentana=$('<div class="clsVentana3">');

                    //creamos la capa que va a mostrar el contenido
                    var $objVentanaContenido=$('<div class="clsVentanaContenido3">');

                    $objVentanaContenido.append("<div style='width:100px; margin: 150px auto; text-align:center;'> <img src='img/loading.gif' class='loading-gif' /> <br/> <p style='font-family: Open Sans, sans-serif;font-size: 12px;color: #333;'>Favor espere un momento...</p> </div>");

                    //agregamos un iframe y en el source colocamos la pagina que queremos cargar ;)
                    // $objVentanaContenido.append('<iframe src="'+strPagina+'">');
                    $objVentanaContenido.load(strPagina);

                    //agregamos un iframe y en el source colocamos la pagina que queremos cargar ;)
                    //$objVentanaContenido.append('<div class="modal_transaccion_botones"><a href="" class="clsVentanaCerrar2"><img src="img/aceptar_ovalo.png"></a>&nbsp;&nbsp;<a href="javascript:window.print()"><img src="img/imprimir.png"></a>&nbsp;&nbsp;<a href="" class="Realizar_Recarga"><img src="img/realizar_otra_recarga.png"></a></div>');

                    //agregamos la capa de contenido a la ventana
                    $objVentana.append($objVentanaContenido);

                    if(navigator.userAgent.indexOf('MSIE')!=-1){
                        $('.hack_modal').append($objVentana);

                    }else{
                        //creamos el overlay con sus propiedades css y lo agregamos al body
                        var $objOverlay=$('<div id="divOverlay">').css({
                            opacity: .5,
                            display: 'none'
                        });

                        $('body').append($objOverlay);

                        //animamos el overlay y cuando su animacion termina seguimos con la ventana
                        $objOverlay.fadeIn(function(){
                            //agregamos la nueva ventana al body
                            $('body').append($objVentana);
                            //mostramos la ventana suavemente ;)
                            $objVentana.fadeIn();
                        });
                    }

                    $('#contenedor_registro_2').removeClass('active').addClass('inactive');
                    $('#contenedor_registro_3').removeClass('inactive').addClass('active');
                },
                error: function(response) {
                 var obj = jQuery.parseJSON( response.responseText );

                 $.each(obj.errors, function(key, value) {
                    $('input[name=' + key).validationEngine('showPrompt', value, 'error');
                 })
                  }
			});


		}
	}
}

function uploadImage(file,type,callback){
    if(
        {
            /*'image/png': true,*/
            'image/jpeg': true/*,
            'image/gif': true*/
        }[file.type] === true && window.FormData){

        var form = new FormData();
        form.append('image',file);
        form.append('type',type);

        if(type!='avatar'){
            $('#upload'+type.charAt(0).toUpperCase() + type.slice(1)).html('Cargando Imagen');
        }

        $.ajax(
            {
                type: 'POST',
                url: $('#uploadId').data('url'),
                data : form,
                cache : false,
                contentType : false,
                processData : false,
                success:function(callback){

                    return {
                        final:function(response){
                            if(type!='avatar'){
                                $('#upload'+response.type.charAt(0).toUpperCase() + response.type.slice(1)).html('Imagen Cargada');
                            }
                            if(callback){
                                callback(response.image);
                            }
							$('#targetUpload'+response.type.charAt(0).toUpperCase() + response.type.slice(1)).val('');
                        }
                    }

                }(callback).final,
                error:function(response){
                    //console.log(response);
                }
            }
        ).fail(function(type){

                return {
                    final:function(/*jqXHR,textStatus,errorThrow*/){
                        if(type!='avatar'){
                            $('#upload'+type.charAt(0).toUpperCase() + type.slice(1)).html('Imagen Invalida <span class="required error"></span>');
                        }
						$('#targetUpload'+type.charAt(0).toUpperCase() + type.slice(1)).val('');
                    }
                }

            }(type).final
        );

    }else{
        if(type!='avatar'){
            $('#upload'+type.charAt(0).toUpperCase() + type.slice(1)).html('Imagen Invalida <span class="required error"></span>');
        }
    }
}

$('#uploadId').on('click',function(){
   $('#targetUploadId').click();
});

$('#targetUploadId').on('change',function(event){
    uploadImage(event.target.files[0],'id');	
});

$('#uploadCard').on('click',function(){
    $('#targetUploadCard').click();
});

$('#targetUploadCard').on('change',function(event){
    uploadImage(event.target.files[0],'card');
});

$('#uploadAvatar').on('click',function(){
    $('#targetUploadAvatar').click();
});

$('#targetUploadAvatar').on('change',function(event){

    uploadImage(event.target.files[0],'avatar',function(url){
        $('#avatar').attr('src', url);
    });

});

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