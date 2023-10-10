<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReservaController;

Route::get('/reserva', [ReservaController::class, 'create'])->name('reserva.create');
Route::post('/reserva', [ReservaController::class, 'store'])->name('reserva.store');


/*no tocar
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/reserva', function () {
    return view('reserva');
});
Route::get('/login', function () {
    return view('login');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


/*..............*/

Route::get('/login', 'App\Http\Controllers\AuthController@showLoginForm')->name('login');
Route::post('/login', 'App\Http\Controllers\AuthController@login');
Route::post('/logout', 'App\Http\Controllers\AuthController@logout')->name('logout');
Route::get('/register', 'App\Http\Controllers\AuthController@showRegistrationForm')->name('register');
Route::post('/register', 'App\Http\Controllers\AuthController@register');

Route::get('/muestra', function () {
    return view('muestra');
});
/* todo ok */
Route::get('/mostrar-tabla', 'ReservaController@mostrarTabla');
