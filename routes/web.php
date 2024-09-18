<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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




Route::get('/empleados', [EmpleadoController::class, 'index'])->name('perfil');


//auth routes




/* autenticacion para acceder */
Route::middleware(['auth'])->group(function () {
    // Aquí van todas las rutas que requieren autenticación
    Route::get('/inicio', [HomeController::class, 'index'])->name('home');
    Route::post('/logout', 'Auth\LoginController@logout')->name('logout');

    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [LoginController::class, 'login']);
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
    Auth::routes();
});


Route::get('/', function () {
    return redirect()->route('login');
});

Auth::routes();

/* Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home'); */

Route::get('/', function () {
    return redirect()->route('login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
