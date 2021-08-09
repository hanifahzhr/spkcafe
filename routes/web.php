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

// Auth::routes();
// Route::get('/home', 'HomeController@index')->name('home');
Auth::routes(['register' => false]);

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

Route::resource('alternatif', 'alternatifController');
// Route::get ('alternatif','alternatifController@index')->name('alternatif');
// Route::get ('alternatif/create','alternatifController@create')->name('createdataalternatif');
// Route::get ('alternatif/{id}/detail','alternatifController@show')->name('showdataalternatif');
// Route::post ('alternatif/store','alternatifController@store')->name('storedataalternatif');
// Route::get ('alternatif/{id}/edit','alternatifController@edit')->name('editalternatif');
// Route::PATCH ('alternatif/{id}', 'alternatifController@update')->name('updatealternatif');

// tidak dipake
//Route::post ('alternatif/id_alternatif','alternatifController@store')->name('storedataalternatif');
//Route::get ('alternatif/{id_alternatif}','alternatifController@destroy')->name('destroydataalternatif');
//----------------//

// Route::get ('alternatif/{id}/delete','alternatifController@delete')->name('deletedataalternatif');
// PERHITUNGAN 
Route::get ('hitungkriteria', 'perhitunganController@kriteria')->name('hitungkriteria');
Route::get ('hitungkonsisten', 'perhitunganController@konsisten')->name('hitungkonsisten');
Route::get ('hitungcekonsisten', 'perhitunganController@cekonsisten')->name('cekonsisten');
Route::get ('hitungalternatif', 'perhitunganController@alternatif')->name('hitungalternatif');


// USER 

// Route::get ('datauser', 'userController@user')->name('user');
// Route::get ('datauser/create', 'userController@create')->name('createuser');
// Route::get ('datauser/{id}/edit','userController@edit')->name('edituser');
// Route::get ('datauser/edit', 'userController@update')->name('updateuser');
Route::resource('datauser', 'userController');
// RANKING 
Route::get ('ranking', 'rankingController@ranking')->name('ranking');

// HOME USER
Route::get ('homeuser', 'HomeuserController@index')->name('homeuser');
Route::get('homeuser/cari', 'HomeuserController@cari');

