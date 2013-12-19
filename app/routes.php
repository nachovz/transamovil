<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

//Rutas para el Front.

Route::get( '/', array( 'uses' => 'FrontController@index' , 'as' => 'index' ));
Route::get( '/comofunciona' , array( 'uses' => 'FrontController@comofunciona' , 'as' => 'comofunciona' ));
Route::get( '/contactanos' , array( 'uses' => 'FrontController@contactanos' , 'as' => 'contactanos' ));
Route::get( '/empresaventajas' , array( 'uses' => 'FrontController@empresaventajas' , 'as' => 'empresaventajas' ));
Route::get( '/hagamosnegocio' , array( 'uses' => 'FrontController@hagamosnegocio' , 'as' => 'hagamosnegocio' ));
Route::get( '/nuestrassoluciones' , array( 'uses' => 'FrontController@nuestrassoluciones' , 'as' => 'nuestrassoluciones' ));
Route::get( '/parativentajas' , array( 'uses' => 'FrontController@parativentajas', 'as' => 'parativentajas' ));
Route::get( '/preguntas' , array( 'uses' => 'FrontController@preguntas' , 'as' => 'preguntas' ));
Route::get( '/quienessomos' , array( 'uses' => 'FrontController@quienessomos' , 'as' => 'quienessomos' ));
Route::get( '/recarga' , array( 'uses' => 'FrontController@recarga' , 'as' => 'recarga' ));
Route::get( '/solucionesadaptables' , array( 'uses' => 'FrontController@solucionesadaptables' , 'as' => 'solucionesadaptables' ));
Route::get( '/transamovil' , array( 'uses' => 'FrontController@transamovil' , 'as' => 'transamovil' ));

//Rutas para el Registro.

Route::get( '/registro', array( 'uses' => 'RegistryController@registro' , 'as' => 'registro' ));
Route::post( '/registro', array( 'uses' => 'RegistryController@registro_usuario' , 'as' => 'registro_usuario' ));
Route::any( '/registro_final', array( 'uses' => 'RegistryController@registro_final', 'as' => 'registro_final' ) );

Route::get('/location/states',array('uses' => 'LocationController@states' , 'as' => 'states'));
Route::get('/location/cities',array('uses' => 'LocationController@cities' , 'as' => 'cities'));
Route::get('/location/townships',array('uses' => 'LocationController@townships' , 'as' => 'townships'));

//Rutas del Panel de Usuario.

Route::post( '/login', array( 'uses' => 'UserPanelController@login' , 'as' => 'login' ));
Route::get( '/logout', array( 'uses' => 'UserPanelController@logout' , 'as' => 'logout' ));
Route::get( '/home', array( 'uses' => 'UserPanelController@home' , 'as' => 'home', 'before' => 'auth' ));
Route::get( '/home2', array( 'uses' => 'UserPanelController@home2' , 'as' => 'home2', 'before' => 'auth' ));
Route::get( '/misservicios', array( 'uses' => 'UserPanelController@misservicios' , 'as' => 'misservicios', 'before' => 'auth' ));
Route::get( '/misservicios2', array( 'uses' => 'UserPanelController@misservicios2' , 'as' => 'misservicios2', 'before' => 'auth' ));
Route::get( '/afiliaciondigitel', array( 'uses' => 'UserPanelController@afiliaciondigitel' , 'as' => 'afiliaciondigitel', 'before' => 'auth' ));
Route::post( '/afiliaciondigitelconfirmar', array( 'uses' => 'UserPanelController@afiliaciondigitelconfirmar' , 'as' => 'afiliaciondigitelconfirmar', 'before' => 'auth' ));
Route::get( '/digitelrecarga', array( 'uses' => 'UserPanelController@digitelrecarga' , 'as' => 'digitelrecarga', 'before' => 'auth' ));
Route::post( '/digitelrecargaconfirmar', array( 'uses' => 'UserPanelController@digitelrecargaconfirmar' , 'as' => 'digitelrecargaconfirmar', 'before' => 'auth' ));

//Rutas modales
Route::get( '/modal/afiliaciondigitelconfirmar/{numero}/{alias}/{prefijo}', array( 'uses' => 'ModalesController@afiliaciondigitelconfirmar', 'as' => 'modal_afiliacion_confirmar', 'before' => 'auth' ) );
Route::get( '/modal/registro/{email}', array( 'uses' => 'ModalesController@registro', 'as' => 'modal_registro' ) );
Route::get( '/modal/recargadigitelconfirmar/{monto}/{numero_afiliado}/{metodo_pago}/{numero_digitel}', array( 'uses' => 'ModalesController@recargadigitelconfirmar', 'as' => 'modal_recarga_confirmar', 'before' => 'auth' ) );
Route::get( '/modal/afiliacionDigitelModificacion/{afiliacion_id}', array( 'uses' => 'ModalesController@afiliacionDigitelModificacion'));
Route::post( '/modal/afiliacionDigitelModificar', array( 'uses' => 'ModalesController@afiliacionDgitelModificar'));
Route::post( '/modal/afiliacionDigitelCrear', array('uses' => 'ModalesController@afiliacionDigitelCrear') );
Route::get( '/modal/afiliacionDigitelEliminar/{afiliacion_id}', array('uses' => 'ModalesController@afiliacionDigitelEliminar') );
