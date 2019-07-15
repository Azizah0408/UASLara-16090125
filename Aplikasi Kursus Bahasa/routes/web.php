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
    return view('home');
});
Route::get('/login', 'AuthController@login');
Route::post('/postlogin', 'AuthController@postlogin');
Route::get('/logout', 'AuthController@lougout');

Route::get('/dashboard', function () {
    return view('dashboard.index');
});
Route::get('/peserta', function () {
    return view('peserta.peserta');
});
Route::get('/jadwal_kursus', function () {
    return view('jadawal.jadwal_kursus');
});
Route::get('/rekap', function () {
    return view('rekap.rekap');
});
Route::get('/Dashboard', function () {
    return view('public.index');
});

Route::get('dashboard', 'DashboardController@index');
Route::get('jadwal_kursus', 'JadwalController@index');
Route::get('peserta', 'PesertaController@index');
Route::get('rekap', 'RekapController@index');