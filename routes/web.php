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
Route::group(['middleware' => 'filterssl'], function () {
    Route::resource('/', 'MainController');
    Route::post('/sendmail', 'MainController@sendmail');
    Route::get('/show', 'MainController@show');
    Route::get('/okullar', 'MainController@dil_okullari');
    Route::get('/ulke_listele','MainController@dil_okullari');
    Route::get('/ulke_listele/{id}', 'MainController@ulkeleregore');
    Route::get('/iletisim', 'MainController@iletisim');
    Route::get('/hakkimizda', 'MainController@hakkimizda');
    Route::get('/tracktest-test-center', 'MainController@tracktest');
    Route::get('/toeic-test-center','MainController@toeic');
    Route::get('/toeic-test-center/sorular','MainController@toeicSSS');
    Route::get('/toeic-test-center/sinav-tarihleri','MainController@toeictarihler');
    Route::get('/toeic-test-center/ornek-sinavlar','MainController@orneksinavlar');

    Route::get('/lrn-global-test-center','MainController@lrn');
    Route::get('/lrn-global-test-center/lrn-iesol','MainController@lrniesol');
    Route::get('/lrn-global-test-center/lrn-communication','MainController@lrncommunication');
    Route::get('/lrn-global-test-center/lrn-CAB','MainController@lrnCab');
    Route::get('/lrn-global-test-center/lrn-IELCA','MainController@lrnIELCA');
    Route::get('/lrn-global-test-center/lrn-BELT','MainController@lrnBELT');
    Route::get('/lrn-global-test-center/lrn-ELTAA','MainController@lrnELTAA');
    Route::get('/lrn-global-test-center/lrn-ELTAB','MainController@lrnELTAB');
    Route::get('/lrn-global-test-center/lrn-ELTAC','MainController@lrnELTAC');
    Route::get('/lrn-global-test-center/lrn-ETAB','MainController@lrnETAB');
    Route::get('/lrn-global-test-center/lrn-general3','MainController@lrngeneral3');
    Route::get('/lrn-global-test-center/lrn-preu3','MainController@lrnpreu3');
    Route::get('/lrn-global-test-center/lrn-bssn3','MainController@lrnbssn3');
    Route::get('/lrn-global-test-center/lrn-bssn7','MainController@lrnbssn7');
    Route::get('/lrn-global-test-center/lrn-bentr5','MainController@lrnbentr5');
    Route::get('/lrn-global-test-center/lrn-bentr5ex','MainController@lrnbentr5ex');
    Route::get('/lrn-global-test-center/lrn-isl3','MainController@lrnisl3');
    Route::get('/lrn-global-test-center/lrn-isl4','MainController@lrnisl4');
    Route::get('/lrn-global-test-center/lrn-isl5','MainController@lrnisl5');
    Route::get('/lrn-global-test-center/lrn-comdev3','MainController@lrncomdev3');

    Route::get('/educity-online', function(){
        return view('/educity-online')->with('title','Educity Online');
    });


    Route::get('awschool','MainController@awschool');    
    Route::get('/yurtdisi-egitim', 'MainController@yurtdisi_egitim');
    Route::get('/onlinebasvuru', 'MainController@onlinebasvuru');
    Route::post('/basvurugonder', 'MainController@basvurugonder');
    Route::get('/okuldetay/{id}', 'MainController@okuldetay');

    Route::get('/login', 'MainController@showlogin');


   Route::get('/panel', 'AdminController@panel');
    Route::post('/check', 'AdminController@check');
    
    Route::get('/panel/ulke_ekle', 'AdminController@ulkeekle');
    Route::post('/panel/addulke', 'AdminController@addulke');
    Route::get('/panel/ulkesil/{id}','AdminController@ulkesil');


    Route::get('/panel/sehir_ekle', 'AdminController@sehirekle');
    Route::post('/panel/addsehir', 'AdminController@addsehir');

    Route::get('/panel/okul_ekle', 'AdminController@okulekle');
    Route::post('/panel/addokul', 'AdminController@addokul');
    Route::post('/panel/okulduzenle' , 'AdminController@edtokul');
    Route::get('/panel/okul_duzenle/{id}', 'AdminController@editokul');
    Route::get('/panel/okul_sil/{id}','AdminController@delokul');


    Route::get('/panel/ulke_goster', 'AdminController@ulkegoster');
    Route::post('/panel/ulkeupdate','AdminController@ulkeupdate');

    Route::get('/panel/sehir_goster', 'AdminController@sehirgoster');
    Route::get('/panel/okul_goster', 'AdminController@okulgoster');

    Route::get('/dnm', 'AdminController@sfr');
    Route::get('/logout', 'AdminController@logout');
});



