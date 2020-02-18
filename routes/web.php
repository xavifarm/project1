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

Route::get('home', function () {
    return view('home');
});

Route::get('/usuarios', 'UserController@index');
Route::get('/usuarios/nuevo', 'UserController@new');
Route::get('/usuarios/{id}', 'UserController@show')->where('id', '[0-9]+');
Route::get('/usuarios/{id}/edit', 'UserController@edit')->where('id', '[0-9]+');
Route::get('/saludo/{name}/{nickname?}', 'WelcomeController@hello');
Route::get('/pasteles', 'PastelController@index');
Route::get('/pasteles/{id}', 'PastelController@show')->where('id', '[0-9]+');


        
?>