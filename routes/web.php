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

Route::resource('kategori_artikel','KategoriArtikelController');

Route::resource('kategori_berita','KategoriBeritaController');

Route::resource('kategori_galeri','KategoriGaleriController');

Route::resource('kategori_pengumuman','KategoriPengumumanController');

/*Route::get('/kategori_berita', 'KategoriBeritaController@index')->name('kategori_berita.index');

Route::get('/kategori_berita/create','KategoriBeritaController@create')->name('kategori_berita.create');

Route::post('/kategori_berita','KategoriBeritaController@store')->name('kategori_berita.store');

Route::get('/kategori_berita/{id}','KategoriBeritaController@show')->name('kategori_berita.show');

Route::get('/kategori_berita/{id}/edit','KategoriBeritaController@edit')->name('kategori_berita.edit');

Route::patch('/kategori_berita/{id}','KategoriBeritaController@update')->name('kategori_berita.update');

Route::delete('/kategori_berita/{id}','KategoriBeritaController@destroy')->name('kategori_berita.destroy');

Route::get('/kategori_galeri', 'KategoriGaleriController@index')->name('kategori_galeri.index');

Route::get('/kategori_galeri/create','KategoriGaleriController@create')->name('kategori_galeri.create');

Route::post('/kategori_galeri','KategoriGaleriController@store')->name('kategori_galeri.store');

Route::get('/kategori_galeri/{id}','KategoriGaleriController@show')->name('kategori_galeri.show');

Route::get('/kategori_galeri/{id}/edit','KategoriGaleriController@edit')->name('kategori_galeri.edit');

Route::patch('/kategori_galeri/{id}','KategoriGaleriController@update')->name('kategori_galeri.update');

Route::delete('/kategori_galeri/{id}','KategoriGaleriController@destroy')->name('kategori_galeri.destroy');

Route::get('/kategori_pengumuman', 'KategoriPengumumanController@index')->name('kategori_pengumuman.index');

Route::get('/kategori_pengumuman/create','KategoriPengumumanController@create')->name('kategori_pengumuman.create');

Route::post('/kategori_pengumuman','KategoriPengumumanController@store')->name('kategori_pengumuman.store');

Route::get('/kategori_pengumuman/{id}','KategoriPengumumanController@show')->name('kategori_pengumuman.show');

Route::get('/kategori_pengumuman/{id}/edit','KategoriPengumumanController@edit')->name('kategori_pengumuman.edit');

Route::patch('/kategori_pengumuman/{id}','KategoriPengumumanController@update')->name('kategori_pengumuman.update');

Route::delete('/kategori_pengumuman/{id}','KategoriPengumumanController@destroy')->name('kategori_pengumuman.destroy');
*/

Route::get('/artikel', 'ArtikelController@index')->name('artikel.index');

Route::get('/artikel/create','ArtikelController@create')->name('artikel.create');

Route::post('/artikel','ArtikelController@store')->name('artikel.store');

Route::get('/artikel/{id}','ArtikelController@show')->name('artikel.show');



Route::get('/berita', 'BeritaController@index')->name('berita.index');

Route::get('/berita/create','BeritaController@create')->name('berita.create');

Route::post('/berita','BeritaController@store')->name('berita.store');

Route::get('/berita/{id}','BeritaController@show')->name('berita.show');



Route::get('/galeri', 'GaleriController@index')->name('galeri.index');

Route::get('/galeri/create','GaleriController@create')->name('galeri.create');

Route::post('/galeri','GaleriController@store')->name('galeri.store');

Route::get('/galeri/{id}','GaleriController@show')->name('galeri.show');



Route::get('/pengumuman', 'PengumumanController@index')->name('pengumuman.index');

Route::get('/pengumuman/create','PengumumanController@create')->name('pengumuman.create');

Route::post('/pengumuman','PengumumanController@store')->name('pengumuman.store');

Route::get('/pengumuman/{id}','PengumumanController@show')->name('pengumuman.show');




Route::get('createcaptcha', 'CaptchaController@create');
Route::post('captcha', 'CaptchaController@captchaValidate');
Route::get('refreshcaptcha', 'CaptchaController@refreshCaptcha');
