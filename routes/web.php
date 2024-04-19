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

//ruta para borrar un usuario de la tabla con la función "delete user"
Route::delete('/auth/deleteUser/{id}', [AuthController::class, 'deleteUser'])->name('deleteUser')->middleware('admin');

//ruta para editar un usuario de la tabla con la función "editUser"
Route::get('/auth/editUser/{id}', [AuthController::class, 'editUser'])->name('editUser')->middleware('admin');

//ruta para actualizar un usuario de la tabla con la función "updateUser"
Route::put('/auth/updateUser/{id}', [AuthController::class, 'updateUser'])->name('updateUser')->middleware('admin');

//ruta para obtener los usuarios y sus casas
Route::get('/auth/tableUsersHouses', [AuthController::class, 'getUsersAndHouses'])->name('tableUsersHouses')->middleware('admin');


Route::get('/auth/admin', function () {
    return view('auth.admin');
})->name('admin')->middleware('admin');


Route::get('/auth/usuario', function () {
    return view('auth.usuario');
})->name('usuario')->middleware('cliente');

//grafica para admin
Route::get('/chart-data', [AuthController::class, 'getChartData']);

//grafica para usuario
Route::get('/chart-Userdata', [AuthController::class, 'getUserChartData']);

//destruir sesion
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

/*--------------------------------------------------------------------------------------------------------------------*/

// ruta api para react native para poder hacer la grafica
Route::get('/api/user-chart-data', [AuthController::class, 'getUserChartData']);

// ruta ap para poder obtener todos los usuarios dentro de la app
Route::get('/api/users', [AuthController::class, 'getUsers']);

/*--------------------------------------------------------------------------------------------------------------------*/

//para la bomba
Route::post('/toggle-pump', [ConexionBomba::class, 'toggle']);


//para react
// fetch('http://<tu-servidor>/api/user-chart-data')
//     .then(response => response.json())
//     .then(data => {
//         // Aquí puedes utilizar los datos para crear tu gráfica
//     });



// Asegúrate de que ambas computadoras estén en la misma red. Esto es necesario para que puedan comunicarse entre sí.
// Obtén la dirección IP de la computadora donde se está ejecutando el servidor de Laravel. Puedes hacer esto ejecutando ipconfig (en Windows) o ifconfig (en Linux/Mac) en la línea de comandos.
// Usa esta dirección IP en lugar de localhost en la URL de tu API en tu aplicación de React Native. Por ejemplo, si la dirección IP de tu servidor es 192.168.1.100 y tu servidor de Laravel se está ejecutando en el puerto 8000, la URL de tu API sería http://192.168.1.100:8000/api/user-chart-data.
// Asegúrate de que tu servidor de Laravel permita solicitudes desde otras direcciones IP. Por defecto, Laravel puede bloquear las solicitudes de otras direcciones IP por razones de seguridad. Puedes cambiar esta configuración en el archivo de configuración de tu servidor de Laravel.
