<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReservaController;

Route::get('/reserva', [ReservaController::class, 'create'])->name('reserva.create');
Route::post('/reserva', [ReservaController::class, 'store'])->name('reserva.store');



/*
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

Route::get('/admin', function () {
    return view('admin');
})->name('admin') ;

Route::get('/reserva', function () {
    return view('reserva');
});


