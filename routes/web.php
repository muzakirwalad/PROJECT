<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pemesanController;
use App\Http\Controllers\PengantarController;
use App\Http\Controllers\designController;
use App\Http\Controllers\pemesananController;
use App\Http\Controllers\KategoriKataKata;

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



//==============================  --USER---   =============================

Route::middleware(['auth','level:user'])->group(function(){
    Route::get('/user/dashboard', function () {
        return view('user.dashboard');
    })->middleware('auth');

    Route::get('/user/pemesanan',[pemesananController::class, 'index']);
    Route::get('/user/tambah_pemesanan',[pemesananController::class, 'create']);
    Route::post('/pemesanan/store',[pemesananController::class, 'store']);
    Route::put('/pemesanan/store',[pemesananController::class, 'store']);
    Route::delete('/pemesanan/{id}', [pemesananController::class, 'destroy']);

});




// =============================  --ADMIN---   ===============================
Route::middleware(['auth', 'level:admin'])->group(function () {
    Route::get('/admin/dashboard', function () {
        // Ganti 'index-admin' dengan nama view halaman index untuk admin
        return view('admin.dashboard');
    });

    Route::get('/kategori',[KategoriKataKata::class, 'index']);
    Route::get('/kategori/create',[KategoriKataKata::class, 'create']);
    Route::get('/kategori/store',[KategoriKataKata::class, 'store']);


    Route::get('/design',[designController::class, 'index']);
    Route::get('/design/create',[designController::class, 'create']);
    Route::post('/design/store',[designController::class, 'store']);
    Route::delete('/design/{id}',[designController::class, 'destroy']);


    Route::controller(PemesanController::class)->prefix('pemesan')->group(function () {
        Route::get('', 'index')->name('pemesan');
        Route::get('create', 'create')->name('pemesan.create');
        Route::post('store', 'store')->name('pemesan.store');
        Route::get('show/{id}', 'show')->name('pemesan.show');
        Route::get('edit/{id}', 'edit')->name('pemesan.edit');
        Route::put('edit/{id}', 'update')->name('pemesan.update');
        Route::delete('destroy/{id}', 'destroy')->name('pemesan.destroy');
    });

});



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


    Route::controller(PengantarController::class)->prefix('pengantar')->group(function () {
        Route::get('', 'index')->name('pengantar');
        Route::get('create', 'create')->name('pengantar.create');
        Route::post('store', 'store')->name('pengantar.store');
        Route::get('show/{id}', 'show')->name('pengantar.show');
        Route::get('edit/{id}', 'edit')->name('pengantar.edit');
        Route::put('edit/{id}', 'update')->name('pengantar.update');
        Route::delete('destroy/{id}', 'destroy')->name('pengantar.destroy');



    });
    Route::get('/profile', [App\Http\Controllers\AuthController::class, 'profile'])->name('profile');


    Route::get('/pengantar', function () {
        return view('pengantar.index');
    });
    Route::get('/tambah', function () {
        return view('pengantar.create');
    });



});

require __DIR__.'/auth.php';
