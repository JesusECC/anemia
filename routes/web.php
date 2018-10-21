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

// Route::get('/', function () {
//     return view('welcome');
// });

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', function () {
    return view('index');
});

//Rutas Madres

//Route::get('/persona', 'madres@index');
//Route::post('/persona/create', 'madres@create');

Route::get('empleados',['as'=>'persona','uses'=>'madres@index']);

//Route::get('empleados',['as'=>'persona','uses'=>'madres@index']);


//Create madre
Route::get('empleados/create',['as'=>'persona-create','uses'=>'madres@create']);
Route::post('empleados/',['as'=>'persona-store','uses'=>'madres@store']);


//Create hijo
Route::get('empleados/createh',['as'=>'persona-create2','uses'=>'madres@create2']);
Route::post('empleados/guardar',['as'=>'persona-store2','uses'=>'madres@store2']);

Route::get('empleados/{id}/edit',['as'=>'persona-edit','uses'=>'madres@edit']);
Route::get('empleados/show/{id}',['as'=>'persona-show','uses'=>'madres@show']);


//calculo de alimentos
Route::get('alimentos',['as'=>'alimentos-index','uses'=>'alimentosController@index']);


// session 
Route::get('alimentos/add/{evento}',['as' => 'cart-add','uses'=>'listaAlimentosController@add']);

Route::get('alimentos/lista',['as' => 'lista-list','uses'=>'listaAlimentosController@show']);