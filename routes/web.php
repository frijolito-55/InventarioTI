<?php

use App\Http\Controllers\Auth\AuthController;
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


route::get('auth/dashboard',[AuthController::class,'dashboard'])->name('auth.dashboard');
Route::get('/', function () {
    return view('/auth/login');
});

Route::get('/asignados', 'App\Http\Controllers\Auth\AuthController@asignados')->name('asignados');
Route::get('/contraseña', 'App\Http\Controllers\Auth\AuthController@contraseña')->name('contraseña');
Route::get('/ControlEquipo', 'App\Http\Controllers\Auth\AuthController@ControlEquipo')->name('ControlEquipo');
Route::get('/CapturaInventario', 'App\Http\Controllers\Auth\AuthController@CapturaInventario')->name('CapturaInventario');
Route::get('/TransferenciaHotel', 'App\Http\Controllers\Auth\AuthController@TransferenciaHotel')->name('TransferenciaHotel');
Route::get('/AceptarTransferencia', 'App\Http\Controllers\Auth\AuthController@AceptarTransferencia')->name('AceptarTransferencia');
Route::get('/Resguardo', 'App\Http\Controllers\Auth\AuthController@Resguardo')->name('Resguardo');
Route::get('/Prestamo', 'App\Http\Controllers\Auth\AuthController@Prestamo')->name('Prestamo');
Route::get('/ReportePrestamo', 'App\Http\Controllers\Auth\AuthController@ReportePrestamo')->name('ReportePrestamo');
Route::get('/ReporteResguardo', 'App\Http\Controllers\Auth\AuthController@ReporteResguardo')->name('ReporteResguardo');
Route::get('/SinAsignar', 'App\Http\Controllers\Auth\AuthController@SinAsignar')->name('SinAsignar');
Route::get('/CrearResguardo', 'App\Http\Controllers\Auth\AuthController@CrearResguardo')->name('CrearResguardo');
Route::get('/CrearPrestamo', 'App\Http\Controllers\Auth\AuthController@CrearPrestamo')->name('CrearPrestamo');
Route::get('/AgregarUsuario', 'App\Http\Controllers\Auth\AuthController@AgregarUsuario')->name('AgregarUsuario');
Route::get('/VistaResguardo', 'App\Http\Controllers\Auth\AuthController@VistaResguardo')->name('VistaResguardo');
Route::get('/Responsiva', 'App\Http\Controllers\Auth\AuthController@Responsiva')->name('Responsiva');

