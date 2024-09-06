<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\Controller;
use App\Models\post;
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


// Route::get('/', [AuthController::class, 'index'])->name('login');
// Route::post('/login', [AuthController::class, 'login'])->name('loginProses');
// Route::get('/register', [AuthController::class, 'registerIndex'])->name('register');
// Route::post('/register', [AuthController::class, 'register'])->name('registerProses');
// Route::get('/logout', [AuthController::class, 'logout'])->name('logout');


Route::controller(Controller::class)->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/create', 'create')->name('create');
    Route::post('/createProses', 'createProses')->name('coba');
    Route::get('/show/{id}', 'show')->name('show');
    Route::post('/edit/{id}', 'edit')->name('edit');
    Route::delete('/destroy/{id}', 'destroy')->name('destroy');
});
