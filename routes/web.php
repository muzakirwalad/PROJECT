<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\mfrfloristController;
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
    return view('welcome');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Route::controller(AuthController::class)->group(function () {
//     Route::get('register', 'register')->name('register');
//     Route::post('register', 'registerSave')->name('register.save');

//     Route::get('login', 'login')->name('login');
//     Route::post('login', 'loginAction')->name('login.action');

//     Route::get('logout', 'logout')->middleware('auth')->name('logout');
// });

Route::middleware('auth')->group(function () {
    Route::get('dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::controller(mfrfloristController::class)->prefix('mfrflorists')->group(function () {
        Route::get('', 'index')->name('mfrflorists');
        Route::get('create', 'create')->name('mfrflorists.create');
        Route::post('store', 'store')->name('mfrflorists.store');
        Route::get('show/{id}', 'show')->name('mfrflorists.show');
        Route::get('edit/{id}', 'edit')->name('mfrflorists.edit');
        Route::put('edit/{id}', 'update')->name('mfrflorists.update');
        Route::delete('destroy/{id}', 'destroy')->name('mfrflorists.destroy');

    });
    Route::get('/profile', [App\Http\Controllers\AuthController::class, 'profile'])->name('profile');
});

require __DIR__.'/auth.php';
