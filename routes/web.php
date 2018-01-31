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

//Controlador principal
Route::get('/', 'PrincipalController@index')->name('inicio');

Route::get('/quienes_somos','PrincipalController@quienes_somos')->name('nosotros');

Route::get('/producto_single/{slug}','PrincipalController@producto_singles')->name('producto');

Auth::routes();

Route::group(['prefix' => 'admin','middleware'=>'auth'],function(){

	Route::get('/home', 'HomeController@index')->name('home');

	Route::resource('sliders', 'SliderController');

	Route::resource('informacions', 'InformacionController');

});

//sort 
Route::post('sort', '\Rutorika\Sortable\SortableController@sort');