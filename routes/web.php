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
route::get('/',[AuthController::class,'login'])->name('auth.login');
route::post('/verify',[AuthController::class,'verify'])->name('login.verify');
Route::get('/asignados', 'App\Http\Controllers\Auth\AuthController@asignados')->name('asignados');
Route::get('/contraseña', 'App\Http\Controllers\Auth\AuthController@contraseña')->name('contraseña');
Route::get('/ControlEquipo', 'App\Http\Controllers\controlEquipo@ControlEquipo')->name('ControlEquipo');
Route::get('/filtrar', 'App\Http\Controllers\controlEquipo@filtrar')->name('filtrar');
Route::get('/CapturaInventario', 'App\Http\Controllers\Auth\AuthController@CapturaInventario')->name('CapturaInventario');

Route::get('/TransferenciaHotel', 'App\Http\Controllers\TransferenciaController@TransferenciaHotel')->name('TransferenciaHotel');
Route::get('/TansferenciaFiltrar', 'App\Http\Controllers\TransferenciaController@TansferenciaFiltrar')->name('TansferenciaFiltrar');


Route::get('/AceptarTransferencia', 'App\Http\Controllers\AceptarTransferencia@AceptarTransferencia')->name('AceptarTransferencia');
Route::get('/DevolverDatos', 'App\Http\Controllers\AceptarTransferencia@DevolverDatos')->name('DevolverDatos');

Route::get('/Resguardo', 'App\Http\Controllers\Auth\AuthController@Resguardo')->name('Resguardo');
Route::get('/Prestamo', 'App\Http\Controllers\Auth\AuthController@Prestamo')->name('Prestamo');
Route::get('/ReportePrestamo', 'App\Http\Controllers\Auth\AuthController@ReportePrestamo')->name('ReportePrestamo');
Route::get('/ReporteResguardo', 'App\Http\Controllers\Auth\AuthController@ReporteResguardo')->name('ReporteResguardo');
Route::get('/SinAsignar', 'App\Http\Controllers\Auth\AuthController@SinAsignar')->name('SinAsignar');
Route::get('/CrearResguardo', 'App\Http\Controllers\Auth\AuthController@CrearResguardo')->name('CrearResguardo');
Route::get('/CrearPrestamo', 'App\Http\Controllers\Auth\AuthController@CrearPrestamo')->name('CrearPrestamo');
Route::get('/AgregarUsuario', 'App\Http\Controllers\Auth\AuthController@AgregarUsuario')->name('AgregarUsuario');

