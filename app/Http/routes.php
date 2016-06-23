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
use Barryvdh\DomPDF\PDF;

Route::get('/', 'SiteController@index');
Route::get('jurado', 'SiteController@jurado');
Route::get('ganadores', 'SiteController@ganadores');
Route::get('recetas', 'SiteController@recetas');
Route::get('capitulos', 'SiteController@capitulos');
Route::get('clasificados', 'SiteController@clasificados');
Route::get('testimonios', 'SiteController@testimonios');

Route::get('testrecetas', 'TestRecetasController@index');

Route::resource('recetas', 'RecetasController');

Route::get('reportes','ReportesController@index');
//Route::get('dreportes', 'PdfController@index');

Route::get('dreportes', function () {
    $pdf = view('reportes');
    return PDF::load($pdf, 'A4', 'portrait')->show();
});


Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
