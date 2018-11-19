<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('contenido/contenido');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/animales', 'HomeController@animales');
Route::get('/borrar', 'HomeController@borrar');
Route::get('/nuevo', 'HomeController@nuevo');
Route::post('/nuevosdes', 'HomeController@nuevode');
Route::get('/borrardes', 'HomeController@borrar2');
Route::post('/actualiza', 'HomeController@actualiza');
Route::post('/actualizadatos', 'HomeController@actualiza2');
