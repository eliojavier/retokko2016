<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*Site*/
Route::get('/', 'SiteController@index');
Route::get('home', 'SiteController@index');
Route::get('jurado', 'SiteController@jurado');
Route::get('ganadores', 'SiteController@ganadores');
Route::get('recetas', 'SiteController@recetas');
Route::get('capitulos', 'SiteController@capitulos');
Route::get('clasificados', 'SiteController@clasificados');
Route::get('testimoniales', 'SiteController@testimoniales');

/*Reportes*/
Route::get('reportes', 'ReportesController@listaReportes');
Route::get('reportes/recetasEstProPostre', 'ReportesController@recetasEstProPostre');
Route::get('reportes/recetasEstProSalado', 'ReportesController@recetasEstProSalado');
Route::get('reportes/recetasAfiPubPostre', 'ReportesController@recetasAfiPubPostre');
Route::get('reportes/recetasAfiPubSalado', 'ReportesController@recetasAfiPubSalado');
Route::get('reportes/recetasTotales', 'ReportesController@totales');

/*Resources*/
Route::resource('usuarios','UsersController');
Route::resource('recetas', 'RecetasController');

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);

//Route::resource('administrarRecetas', 'AdministrarRecetasController');
//Route::resource('reportes', 'ReportesController');
//Route::get('testrecetas', 'TestRecetasController@index');
//Route::get('dreportes', 'PdfController@index');

//Route::get('dreportes', function () {
//    $pdf = view('reportes');
//    return PDF::load($pdf, 'A4', 'portrait')->show();
//});

//Route::get('/', 'WelcomeController@index');
//Route::get('home', 'HomeController@index');


