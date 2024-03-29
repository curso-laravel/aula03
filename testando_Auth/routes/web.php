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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/teste', 'TesteController@index');

Route::get('/info', 'TesteController@phpinfo');

Route::get('/teste/home', 'TesteController@home');

Route::get('/boa-tarde', 'TesteController@boatarde');


Route::get('/single-controller', 'ForeverAloneControler');


Route::resource('/crude', 'CrudeController');