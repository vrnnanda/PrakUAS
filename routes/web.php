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

Route::get('/koneksi', function () {
    return view('koneksi');
});

Route::get('/login', 'AuthController@login')->middleware('guest')->name('login');

Route::post('/user/cekLogin', 'AuthController@cekLogin')->middleware('guest');

Route::post('/user/home', 'AuthController@home');

Route::get('/dashboard', function () {
    return view('dashboard');
});
Route::get('/user', 'AuthController@user')->middleware('auth');

Route::get('/user/formuser', 'AuthController@formuliruser')->middleware('auth');

Route::post('/user/simpanuser', 'AuthController@simpanuser')->middleware('auth');

Route::get('/user/edituser/{id}', 'AuthController@edituser');

Route::get('/user/updateuser/{id}', 'AuthController@updateuser');

Route::get('/mahasiswa', 'MhsController@mhs')->middleware('auth');;

Route::get('/mahasiswa/cari', 'MhsController@pencarian');

Route::get('/mahasiswa/formulirmhs', 'MhsController@formulirmhs');

Route::post('/mahasiswa/simpanmhs', 'MhsController@simpanmhs');

Route::get('/mahasiswa/editMhs/{id}', 'MhsController@editmhs');

Route::put('/mahasiswa/updatemhs/{id}', 'MhsController@updatemhs');

Route::get('/mahasiswa/deletemhs/{id}', 'MhsController@deletemhs');

Route::get('/dosen', 'DosenController@dosen')->middleware('auth');;

Route::get('/matakuliah', 'MatkulController@matkul')->middleware('auth');;

Route::get('/logout',  'AuthController@logout')->middleware('auth');

