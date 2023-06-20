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

Route::group(['middleware' => ['web']], function() {
    //
    Route::get('/home', 'PageController@home');
    Route::get('/profile', 'PageController@profile');
    Route::get('/mahasiswa', 'PageController@mahasiswa');
    Route::get('/contact', 'PageController@contact');
    Route::get('/mahasiswa/pencarian', 'PageController@pencarian');
    Route::get('/mahasiswa/formtambah', 'PageController@tambah');
    Route::post('/mahasiswa/simpan', 'PageController@simpan');
    Route::get('/mahasiswa/formedit/{nik}', 'PageController@edit');
    Route::put('/mahasiswa/update/{nik}', 'PageController@update');
    Route::get('/mahasiswa/delete/{nik}', 'PageController@delete');
    Route::get('/mahasiswa/profilemhs/{nik}','PageController@profilemhs');
    Route::get('/setting','PageController@setting');

});


Route::group(['middleware' => ['guest']], function(){
    Route::get('/register','AuthController@register');
    Route::post('/simpan','AuthController@simpan')->middleware('auth');
    Route::get('/','AuthController@login')->middleware('guest')->name('login');
    Route::post('/ceklogin','AuthController@ceklogin');
    Route::get('/logout','AuthController@logout')->middleware(('auth'));

});


Route::get('/index', function(){
    return view('index');
});