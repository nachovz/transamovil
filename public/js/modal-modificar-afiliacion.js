$(document).ready(function(){
		$('.clsVentanaModificarAfiliacion').on('click', mostrar_modal_modificar_afiliacion);
		$('.clsVentanaEliminarAfiliacion').on('click', mostrar_modal_eliminar_afiliacion);
		$('.clsVentanaCerrar10').live('click',function(eEvento){
			window.location.reload();
		});


});

function mostrar_modal_modificar_afiliacion(e)
{
		//prevenir el comportamiento normal del enlace
		e.preventDefault();

		//obtenemos la pagina que queremos cargar en la ventana y el titulo
		var strPagina = "modal/afiliacionDigitelModificacion/" + $('input[name="afiliacion_id"]:checked').val()
		var strTitulo = "Titulo";
		
		//creamos la nueva ventana para mostrar el contenido y la capa para el titulo
		var $objVentana=$('<div class="clsVentana3">');
		
		//creamos la capa que va a mostrar el contenido
		var $objVentanaContenido=$('<div class="clsVentanaContenido3">');
		
		//agregamos un iframe y en el source colocamos la pagina que queremos cargar ;)
		$objVentanaContenido.append('<iframe src="'+strPagina+'">');
		
		//agregamos un iframe y en el source colocamos la pagina que queremos cargar ;)
		$objVentanaContenido.append('<div class="modal_transaccion_botones_mod1"><a href="" class="clsVentanaCerrar10"><img src="img/cerrar.png"></div>');
		
		//agregamos la capa de contenido a la ventana
		$objVentana.append($objVentanaContenido);
		
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

function mostrar_modal_eliminar_afiliacion(e)
{
		//prevenir el comportamiento normal del enlace
		e.preventDefault();

		//obtenemos la pagina que queremos cargar en la ventana y el titulo
		var strPagina = "modal/afiliacionDigitelEliminar/" + $('input[name="afiliacion_id"]:checked').val()
		var strTitulo = "Titulo";
		
		//creamos la nueva ventana para mostrar el contenido y la capa para el titulo
		var $objVentana=$('<div class="clsVentana3">');
		
		//creamos la capa que va a mostrar el contenido
		var $objVentanaContenido=$('<div class="clsVentanaContenido3">');
		
		//agregamos un iframe y en el source colocamos la pagina que queremos cargar ;)
		$objVentanaContenido.append('<iframe src="'+strPagina+'">');
		
		//agregamos un iframe y en el source colocamos la pagina que queremos cargar ;)
		$objVentanaContenido.append('<div class="modal_transaccion_botones_mod2"><a href="" class="clsVentanaCerrar10"><img src="img/aceptar.png"></div>');
		
		//agregamos la capa de contenido a la ventana
		$objVentana.append($objVentanaContenido);
		
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