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
    return view('components.index');
});

//Pengaduan
// Route::get('/pengaduan',  'PengaduanController@index');
Route::get('/form-pengaduan',  'PengaduanController@create')->name('form-pengaduan');
Route::post('/pengaduan-simpan',  'PengaduanController@store')->name('pengaduan-simpan');
Route::get('/laporan-pengaduan', 'PengaduanController@laporanPengaduan')->name('laporan-pengaduan');


//all
Route::get('/login',  'LoginController@index')->name('login');
Route::post('/login',  'LoginController@login');
Route::get('/logout',  'LoginController@logout');
// Route::get('/pengaduan',  'PengaduanController@index');


Route::group(['middleware' => ['auth']], function() {
    Route::get('/home',  'LoginController@home');
	Route::get('/changepass',  'UserController@changePass');
	Route::post('/changepass/{id}',  'UserController@changePassSubmit')->name('changepass');

	//admin
    Route::group(['middleware' => ['role:1']], function() {
		Route::get('/home-tanggapan','TanggapanController@index');
        Route::get('/home-pengaduan','PengaduanController@tampilpengaduan');


		Route::get('/home-pengaduan/{id}','PengaduanController@detailPengaduan')->name('home-pengaduan.detail');
		Route::get('/home-pengaduan/destroy/{id}','PengaduanController@destroyPengaduan')->name('home-pengaduan.destroy');
	});


});

	