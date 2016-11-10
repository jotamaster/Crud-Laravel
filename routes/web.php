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
    return view('web');
});

Route::get('crud', 'CrudController@index');
Route::delete('crud/{id}','CrudController@destroy');
Route::get('create', 'CrudController@create');
Route::post('crud', 'CrudController@store');
Route::post('crud/edit/{id}', 'CrudController@edit');
Route::put('crud/{id}', 'CrudController@update');
Route::get('prueba', function(){
 return view('editar');
});
