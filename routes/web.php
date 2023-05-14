<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\LoginController;
use App\Http\Controllers\PortoController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\ArtikelController;


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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('home', [
        "title" => "Home",
        "href" => "#hero"
    ]);
});
Route::get('/services', function () {
    return view('services', ["title" => "Services", "href" => "/"]);
});

Route::prefix('admin')->group(function () {
    Route::prefix('artikel')->group(function () {
        Route::get('/', [ArtikelController::class, 'index'])->name('admin.artikel.index');
        Route::get('/create', [ArtikelController::class, 'create'])->name('admin.artikel.create');
        Route::post('/', [ArtikelController::class, 'store'])->name('admin.artikel.store');
        Route::get('/edit/{id}', [ArtikelController::class, 'edit'])->name('admin.artikel.edit');
        Route::put('/{id}', [ArtikelController::class, 'update'])->name('admin.artikel.update');
        Route::delete('/{id}', [ArtikelController::class, 'destroy'])->name('admin.artikel.destroy');
    });
    Route::prefix('galeri')->group(function () {
        Route::get('/', [GaleriController::class, 'index'])->name('admin.galeri.index');
        Route::get('/create', [GaleriController::class, 'create'])->name('admin.galeri.create');
        Route::post('/', [GaleriController::class, 'store'])->name('admin.galeri.store');
        Route::get('/edit/{id}', [GaleriController::class, 'edit'])->name('admin.galeri.edit');
        Route::put('/{id}', [GaleriController::class, 'update'])->name('admin.galeri.update');
        Route::delete('/{id}', [GaleriController::class, 'destroy'])->name('admin.galeri.destroy');
    });
    Route::prefix('portofolio')->group(function () {
        Route::get('/', [PortoController::class, 'index'])->name('admin.porto.index');
        Route::get('/create', [PortoController::class, 'create'])->name('admin.porto.create');
        Route::post('/', [PortoController::class, 'store'])->name('admin.porto.store');
        Route::get('/edit/{id}', [PortoController::class, 'edit'])->name('admin.porto.edit');
        Route::put('/{id}', [PortoController::class, 'update'])->name('admin.porto.update');
        Route::delete('/{id}', [PortoController::class, 'destroy'])->name('admin.porto.destroy');
    });
});

// login
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/postlogin', [LoginController::class, 'authenticate'])->name('login.authenticate');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/register', [LoginController::class, 'register'])->name('register');
Route::post('/register', [LoginController::class, 'store'])->name('register.store');