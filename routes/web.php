<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('home');
});
Route::get('ingresar', function () {
    return view('ingresar');
});
Route::get('registrarse', function () {
    return view('registrar');
});
Route::get('ayuda', function () {
    return view('ayuda');
});
Route::get('acercade', function () {
    return view('acercade');
});


Route::group(['prefix' => 'admin'], function () {
  Auth::routes();
  Route::get('/', 'HomeController@index');
  Route::resource('ciudades', 'ciudadesController');

});

Auth::routes();

Route::get('/home', 'HomeController@index');
