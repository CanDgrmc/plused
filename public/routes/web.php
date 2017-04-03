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

Route::resource('/', 'MainController');
Route::post('/sendmail', 'MainController@sendmail');
Route::get('/show', 'MainController@show');
Route::get('/okullar', 'MainController@dil_okullari');
Route::get('/iletisim', 'MainController@iletisim');
Route::get('/hakkimizda', 'MainController@hakkimizda');
Route::get('/tracktest', 'MainController@tracktest');
Route::get('/yurtdisi_egitim', 'MainController@yurtdisi_egitim');

Route::get('/login', 'MainController@showlogin');


Route::post('/check', 'AdminController@check');
Route::get('/panel', 'AdminController@panel');
Route::get('/panel/ulke_ekle', 'AdminController@ulkeekle');
Route::post('/panel/addulke', 'AdminController@addulke');


Route::get('/panel/sehir_ekle', 'AdminController@sehirekle');
Route::post('/panel/addsehir', 'AdminController@addsehir');

Route::get('/panel/okul_ekle', 'AdminController@okulekle');
Route::post('/panel/addokul', 'AdminController@addokul');

Route::get('/panel/ulke_goster', 'AdminController@ulkegoster');
Route::get('/panel/sehir_goster', 'AdminController@sehirgoster');
Route::get('/panel/okul_goster', 'AdminController@okulgoster');

Route::get('/dnm', 'AdminController@sfr');
Route::get('/logout', 'AdminController@logout');




