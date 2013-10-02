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
Route::get( '/registro', array( 'uses' => 'FrontController@registro' , 'as' => 'registro' ));
Route::get( '/solucionesadaptables' , array( 'uses' => 'FrontController@solucionesadaptables' , 'as' => 'solucionesadaptables' ));
Route::get( '/transamovil' , array( 'uses' => 'FrontController@transamovil' , 'as' => 'transamovil' ));