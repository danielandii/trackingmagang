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
Route::get('/detail-pengaduan/ {id} {no_tiket}', 'PengaduanController@TampilDetailPengaduan')->name('detail-pengaduan');
Route::get('/pengaduan/cari','PengaduanController@cari')->name('cari-pengaduan');
Route::delete('delete-pengaduan/{id}','PengaduanController@delete')->name('delete-pengaduan');
	

//  Route::get('/View', 'PengaduanController@getview')->nama('View');
// Route::get('/home-history','TanggapanController@historytanggapan')->name('home-history');
// Route::get('/download/{id}','PengaduanController@show')->name('download');

//all
Route::get('/login',  'LoginController@index')->name('login');
Route::post('/login',  'LoginController@login');
Route::get('/logout',  'LoginController@logout');



// Route::get('/petugas/login', 'LoginController@FormLoginPetugas');
// Route::get('/petugas/login/post', 'LoginController@LoginPetugas')->name('petugas.login');
// Route::get('/pengaduan',  'PengaduanController@index');


Route::group(['middleware' => ['auth']], function() {
   

	//superadmin
	// Route::middleware('superadmin')->group(function() {
		 Route::get('/home',  'PengaduanController@index')->name('home');
	Route::get('/changepass',  'UserController@changePass');
	Route::post('/changepass/{id}',  'UserController@changePassSubmit')->name('changepass');
	

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
		
	

        Route::get('/home-pengaduan','PengaduanController@tampilpengaduan')->name('home-pengaduan.tampil');

		Route::get('/home-pengaduan/{id}','PengaduanController@detailPengaduan')->name('home-pengaduan.detail');
		Route::post('/home-pengaduan/onchange/{id}','PengaduanController@statusOnchange')->name('home-pengaduan.onchange');
		Route::delete('/home-pengaduan/destroy/{id}','PengaduanController@destroyPengaduan')->name('home-pengaduan.destroy');

		
		Route::get('/history','TanggapanController@historyTanggapan')->name('home-history');
		Route::get('/history/{id}','TanggapanController@historyshow')->name('home-history.show');

		Route::get('/laporan-pengaduan', 'PengaduanController@laporanPengaduan')->name('laporan-pengaduan');
        Route::get('/laporan-pengaduan','PengaduanController@tampilpengaduan')->name('home-pengaduan.tampil');
		Route::get('/laporan-pengaduan/{id}','PengaduanController@detailPengaduan')->name('home-pengaduan.detail');
		Route::post('/laporan-pengaduan/onchange/{id}','PengaduanController@statusOnchange')->name('home-pengaduan.onchange');
		Route::delete('/laporan-pengaduan/destroy/{id}','PengaduanController@destroyPengaduan')->name('home-pengaduan.destroy');
	});

	// //admin
	Route::group(['middleware' => ['role:10']], function() {
		Route::get('/admin/home-tanggapan/{id}','TanggapanController@create')->name('admin.home-tanggapan.create');
		Route::post('/admin/home-tanggapan/{id}','TanggapanController@store')->name('admin.home-tanggapi');
		
		 Route::get('/admin/home-history','TanggapanController@historytanggapan')->name('admin.home-history');
		 Route::get('/admin/history/{id}','TanggapanController@historyshow')->name('home-history.show');

        Route::get('/admin/home-pengaduan','PengaduanController@tampilpengaduan')->name('admin.home-pengaduan.tampil');

		Route::get('/admin/home-pengaduan/{id}','PengaduanController@detailPengaduan')->name('admin.home-pengaduan.detail');
		Route::post('/admin/home-pengaduan/onchange/{id}','PengaduanController@statusOnchange')->name('admin.home-pengaduan.onchange');
		Route::delete('/admin/home-pengaduan/destroy/{id}','PengaduanController@destroyPengaduan')->name('admin.home-pengaduan.destroy');
	});

});

	