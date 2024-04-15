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
Route::get('/Resguardo', 'App\Http\Controllers\ResguardoController@Resguardo')->name('Resguardo');
Route::get('/VistaResguardo', 'App\Http\Controllers\VistaResguardoController@VistaResguardo')->name('VistaResguardo');
Route::get('/Prestamo', 'App\Http\Controllers\PrestamosController@Prestamo')->name('Prestamo');
Route::get('/PrestamoTable', 'App\Http\Controllers\PrestamosController@PrestamoTable')->name('PrestamoTable');

Route::get('/ReportePrestamo', 'App\Http\Controllers\Auth\AuthController@ReportePrestamo')->name('ReportePrestamo');
Route::get('/ReporteResguardo', 'App\Http\Controllers\Auth\AuthController@ReporteResguardo')->name('ReporteResguardo');
Route::get('/SinAsignar', 'App\Http\Controllers\Auth\AuthController@SinAsignar')->name('SinAsignar');
Route::get('/CrearResguardo', 'App\Http\Controllers\Auth\AuthController@CrearResguardo')->name('CrearResguardo');
Route::get('/CrearPrestamo', 'App\Http\Controllers\Auth\AuthController@CrearPrestamo')->name('CrearPrestamo');
Route::get('/AgregarUsuario', 'App\Http\Controllers\Auth\AuthController@AgregarUsuario')->name('AgregarUsuario');
Route::get('/VistaPrestamo', 'App\Http\Controllers\VistaPrestamoController@VistaPrestamo')->name('VistaPrestamo');
Route::get('/Responsiva', 'App\Http\Controllers\ResponsivaController@Responsiva')->name('Responsiva');
Route::get('/mostrarDatosResguardo', 'App\Http\Controllers\ResguardoController@mostrarDatosResguardo')->name('mostrarDatosResguardo');
Route::get('/ActualizarControl', 'App\Http\Controllers\Auth\AuthController@ActualizarControl')->name('ActualizarControl');
Route::get('/AsignarEquipo', 'App\Http\Controllers\Auth\AuthController@AsignarEquipo')->name('AsignarEquipo');
Route::get('/ActualizarResguardo', 'App\Http\Controllers\Auth\AuthController@ActualizarResguardo')->name('ActualizarResguardo');
Route::get('/ActualizarPrestamo', 'App\Http\Controllers\Auth\AuthController@ActualizarPrestamo')->name('ActualizarPrestamo');
Route::get('/ResponsivaPrestamo', 'App\Http\Controllers\ResponsivaPresController@ResponsivaPrestamo')->name('ResponsivaPrestamo');
Route::get('/Licencias', 'App\Http\Controllers\Auth\AuthController@Licencias')->name('Licencias');
Route::get('/ControlLicencia', 'App\Http\Controllers\Auth\AuthController@ControlLicencia')->name('ControlLicencia');
Route::get('/CrearLicencia', 'App\Http\Controllers\Auth\AuthController@CrearLicencia')->name('CrearLicencia');
Route::get('/Asignados', 'App\Http\Controllers\Auth\AuthController@Asignados')->name('Asignados');
Route::get('/VistaLicencia', 'App\Http\Controllers\Auth\AuthController@VistaLicencia')->name('VistaLicencia');
Route::get('/EditarLicencia', 'App\Http\Controllers\Auth\AuthController@EditarLicencia')->name('EditarLicencia');
Route::get('/Administrador', 'App\Http\Controllers\Auth\AuthController@Administrador')->name('Administrador');



