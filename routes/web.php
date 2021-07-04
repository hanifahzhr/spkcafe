<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/login', 'otentikasiController@login')->name('Login');
// Route::get('/create', 'alternatifController@create')->name('Create Alternatif');
// Route::get('/editalternatif', 'alternatifController@edit')->name('Edit Alternatif');
//  Route::get('/index', 'alternatifController@index')->name('Index Alternatif');

// Route::get('/alternatif', 'alternatifController@alternatif')->name('Alternatif');
// Route::get ('alternatif/{alternatif}','alternatifController@show');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

// DASHBOARD
Route::get ('/dashboard','DashboardController@index')->name('dashboard');

// DATA KRITERIA
Route::get ('kriteria','kriteriaController@index')->name('kriteria');
Route::get ('/datakriteria/{id_kriteria}','DataKriteriaController@show');
Route::get ('/datakriteria/{id_kriteria}','DataKriteriaController@create');
Route::get ('/datakriteria/{id_kriteria}','DataKriteriaController@store');
Route::get ('/datakriteria/{id_kriteria}','DataKriteriaController@update');
Route::get ('/datakriteria/{id_kriteria}','DataKriteriaController@destroy');

// DATA ALTERNATIF

Route::get ('alternatif','alternatifController@index')->name('alternatif');
Route::get ('alternatif/create','alternatifController@create')->name('createdataalternatif');
Route::post ('alternatif/store','alternatifController@store')->name('storedataalternatif');
Route::get ('alternatif/edit','alternatifController@update')->name('updatealternatif');
Route::get ('alternatif/{id}/detail','alternatifController@show')->name('showdataalternatif');
//Route::post ('alternatif/id_alternatif','alternatifController@store')->name('storedataalternatif');
//Route::get ('alternatif/{id_alternatif}','alternatifController@destroy')->name('destroydataalternatif');
Route::get ('alternatif/{id}/delete','alternatifController@delete')->name('deletedataalternatif');
// PERHITUNGAN 
Route::get ('hitungkriteria', 'perhitunganController@kriteria')->name('hitungkriteria');
Route::get ('hitungkonsisten', 'perhitunganController@konsisten')->name('hitungkonsisten');
Route::get ('hitungcekonsisten', 'perhitunganController@cekonsisten')->name('cekonsisten');
Route::get ('hitungalternatif', 'perhitunganController@alternatif')->name('hitungalternatif');


// USER 
Route::get ('user', 'userController@user')->name('user');
Route::get ('user/create', 'userController@create')->name('createuser');
Route::get ('user/edit', 'userController@update')->name('updateuser');

// RANKING 
Route::get ('ranking', 'rankingController@ranking')->name('ranking');
// DATA
// Route::get ('alternatif','alternatifController@index');
// Route::get ('alternatif','alternatifController@index');
// Route::get ('alternatif','alternatifController@index');
// Route::get ('alternatif','alternatifController@index');
// Route::get ('alternatif','alternatifController@index');
// Route::get ('alternatif','alternatifController@index');

