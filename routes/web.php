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
Route::get('/detail-pengaduan/{id}', 'PengaduanController@TampilDetailPengaduan')->name('detail-pengaduan');
//  Route::get('/View', 'PengaduanController@getview')->nama('View');
// Route::get('/home-history','TanggapanController@historytanggapan')->name('home-history');


//all
Route::get('/login',  'LoginController@index')->name('login');
Route::post('/login',  'LoginController@login');
Route::get('/logout',  'LoginController@logout');



// Route::get('/petugas/login', 'LoginController@FormLoginPetugas');
// Route::get('/petugas/login/post', 'LoginController@LoginPetugas')->name('petugas.login');
// Route::get('/pengaduan',  'PengaduanController@index');


Route::group(['middleware' => ['auth']], function() {
    Route::get('/home',  'PengaduanController@index');
	Route::get('/changepass',  'UserController@changePass');
	Route::post('/changepass/{id}',  'UserController@changePassSubmit')->name('changepass');

	//superadmin
	Route::group(['middleware' => ['role:1']], function() {
		// *****************CRUD Superadmin********************
		Route::get('users', 'UserController@index')->name('users');
		Route::get('users-edit/{id}', 'UserController@edit')->name('users-edit');
		Route::get('users-create', 'UserController@create')->name('users-create');
		Route::get('users-update/{id}', 'UserController@update')->name('users-update');
		Route::post('users-store', 'UserController@store')->name('users-store');
		Route::delete('users-delete/{id}', 'UserController@destroy')->name('users-delete');
		
			// Route::resource('users', 'UserController');
		// Route::resource('tanggapan', 'TanggapanController');
		
		Route::get('/home-tanggapan/{id}','TanggapanController@create')->name('home-tanggapan.create');
		Route::post('/home-tanggapan/{id}','TanggapanController@store')->name('home-tanggapi');
		
		 Route::get('/home-history','TanggapanController@historytanggapan')->name('home-history');

        Route::get('/home-pengaduan','PengaduanController@tampilpengaduan')->name('home-pengaduan.tampil');

		Route::get('/home-pengaduan/{id}','PengaduanController@detailPengaduan')->name('home-pengaduan.detail');
		Route::post('/home-pengaduan/onchange/{id}','PengaduanController@statusOnchange')->name('home-pengaduan.onchange');
		Route::get('/home-pengaduan/destroy/{id}','PengaduanController@destroyPengaduan')->name('home-pengaduan.destroy');
	});
	// //admin
	// Route::group(['middleware' => ['role:10']], function() {
	// 	Route::get('/home-tanggapan/{id}','TanggapanController@create')->name('home-tanggapan.create');
	// 	Route::post('/home-tanggapan/{id}','TanggapanController@store')->name('home-tanggapi');


    //     Route::get('/home-pengaduan','PengaduanController@tampilpengaduan')->name('home-pengaduan.tampil');

	// 	Route::get('/home-pengaduan/{id}','PengaduanController@detailPengaduan')->name('home-pengaduan.detail');
	// 	Route::get('/home-pengaduan/destroy/{id}','PengaduanController@destroyPengaduan')->name('home-pengaduan.destroy');
	// });

});

	