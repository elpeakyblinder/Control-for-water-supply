<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
//use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\AuthController;
//use App\Http\Controllers\AdminController;
use App\Http\Controllers\ConexionBomba;
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

//ruta para la pagina principal
Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/info', function () {
    phpinfo();
});

//rutas para acceder a la vista del login y procesar por metodo POST los datos del mismo.
Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('login', [AuthController::class, 'postLogin']);

//rutas para acceder a la vista del registro y procesar por metodo POST los datos del mismo.
Route::get('/auth/register', [AuthController::class, 'register'])->name('register')->middleware('admin');
Route::post('register', [AuthController::class, 'postRegister']);

//ruta para registrar una casa y procesar por metodo POST los datos de la misma.
Route::post('/registerHouse', [AuthController::class, 'postRegisterHouse']);

//ruta para obtener los usuarios de la colecccion por medio de la funcion getUsers
Route::get('/auth/table', [AuthController::class, 'getUsers'])->name('table')->middleware('admin');

//ruta para borrar un suario de la tabla con la funcion "delete user"
Route::delete('/auth/deleteUser/{id}', [AuthController::class, 'deleteUser'])->name('deleteUser')->middleware('admin');


Route::get('/auth/admin', function () {
    return view('auth.admin');
})->name('admin')->middleware('admin');


Route::get('/auth/usuario', function () {
    return view('auth.usuario');
})->name('usuario')->middleware('cliente');

//grafica admin
Route::get('/chart-data', [AuthController::class, 'getChartData']);
//grafica usuario
Route::get('/chart-Userdata', [AuthController::class, 'getUserChartData']);

//destruir sesion
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

//para la bomba
Route::post('/toggle-pump', [ConexionBomba::class, 'toggle']);
