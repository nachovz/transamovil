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
Route::get( '/registro2', array( 'uses' => 'RegistryController@registro2' , 'as' => 'registro2' ));
Route::get( '/registro3', array( 'uses' => 'RegistryController@registro3' , 'as' => 'registro3' ));
Route::post( '/registro_final', array( 'uses' => 'RegistryController@registro_final', 'as' => 'registro_final' ) );

//Rutas del Panel de Usuario.

Route::post( '/login', array( 'uses' => 'UserPanelController@login' , 'as' => 'login' ));
Route::get( '/home', array( 'uses' => 'UserPanelController@home' , 'as' => 'home' ));
Route::get( '/home2', array( 'uses' => 'UserPanelController@home2' , 'as' => 'home2' ));
Route::get( '/misservicios', array( 'uses' => 'UserPanelController@misservicios' , 'as' => 'misservicios' ));
Route::get( '/misservicios2', array( 'uses' => 'UserPanelController@misservicios2' , 'as' => 'misservicios2' ));
Route::get( '/afiliaciondigitel', array( 'uses' => 'UserPanelController@afiliaciondigitel' , 'as' => 'afiliaciondigitel' ));
Route::get( '/afiliaciondigitelconfirmar', array( 'uses' => 'UserPanelController@afiliaciondigitelconfirmar' , 'as' => 'afiliaciondigitelconfirmar' ));
Route::get( '/digitelrecarga', array( 'uses' => 'UserPanelController@digitelrecarga' , 'as' => 'digitelrecarga' ));
Route::get( '/digitelrecargaconfirmar', array( 'uses' => 'UserPanelController@digitelrecargaconfirmar' , 'as' => 'digitelrecargaconfirmar' ));