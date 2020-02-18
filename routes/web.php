<?php

use App\Article;
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
})->name('inicio');

Route::get('/usuarios', 'UserController@index')->name('users');
Route::get('/usuarios/nuevo', 'UserController@new')->name('new_user');
Route::get('/usuarios/{id}', 'UserController@show')->where('id', '[0-9]+')->name('detalle_users');
Route::get('/usuarios/{id}/edit', 'UserController@edit')->where('id', '[0-9]+');
Route::get('/saludo/{name}/{nickname?}', 'WelcomeController@hello');
Route::get('/pasteles', 'PastelController@index')->name('pasteles');
Route::get('/pasteles/{id}', 'PastelController@show')->where('id', '[0-9]+');
Route::get('/articulos', 'ArticleController@index')->name('articulos');

/*Route::get('articulos', function(){
    return view('articulos.index', ['articles'=>Article::all()]);
})->name('articulos');*/


        
?>