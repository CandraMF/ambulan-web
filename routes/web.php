<?php

use App\Http\Controllers\AmbulanController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\FotoAmbulanController;
use App\Http\Controllers\FotoLayananController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SettingController;
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

Route::get('/', [LandingPageController::class, 'index'])->name('landingpage');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/ambulan', [AmbulanController::class, 'index'])->middleware(['auth', 'verified'])->name('ambulan');
Route::get('/ambulan/create', [AmbulanController::class, 'create'])->middleware(['auth', 'verified'])->name('ambulan.create');
Route::post('/ambulan/store', [AmbulanController::class, 'store'])->middleware(['auth', 'verified'])->name('ambulan.store');
Route::get('/ambulan/edit/{id}', [AmbulanController::class, 'edit'])->middleware(['auth', 'verified'])->name('ambulan.edit');
Route::put('/ambulan/update/{id}', [AmbulanController::class, 'update'])->middleware(['auth', 'verified'])->name('ambulan.update');
Route::delete('/ambulan/{id}', [AmbulanController::class, 'destroy'])->middleware(['auth', 'verified'])->name('ambulan.destroy');
Route::get('/ambulan/{id}', [AmbulanController::class, 'show'])->middleware(['auth', 'verified'])->name('ambulan.show');

Route::get('/foto-ambulan', [FotoAmbulanController::class, 'index'])->middleware(['auth', 'verified'])->name('foto');
Route::put('/foto-ambulan/update/{id}', [FotoAmbulanController::class, 'update'])->middleware(['auth', 'verified'])->name('foto.update');
Route::delete('/foto-ambulan/{id}', [FotoAmbulanController::class, 'destroy'])->middleware(['auth', 'verified'])->name('foto.destroy');

Route::get('/layanan', [LayananController::class, 'index'])->middleware(['auth', 'verified'])->name('layanan');
Route::get('/layanan/create', [LayananController::class, 'create'])->middleware(['auth', 'verified'])->name('layanan.create');
Route::post('/layanan/store', [LayananController::class, 'store'])->middleware(['auth', 'verified'])->name('layanan.store');
Route::get('/layanan/edit/{id}', [LayananController::class, 'edit'])->middleware(['auth', 'verified'])->name('layanan.edit');
Route::put('/layanan/update/{id}', [LayananController::class, 'update'])->middleware(['auth', 'verified'])->name('layanan.update');
Route::delete('/layanan/{id}', [LayananController::class, 'destroy'])->middleware(['auth', 'verified'])->name('layanan.destroy');
Route::get('/layanan/{id}', [LayananController::class, 'show'])->middleware(['auth', 'verified'])->name('layanan.show');

Route::get('/artikel', [ArtikelController::class, 'index'])->middleware(['auth', 'verified'])->name('artikel');
Route::get('/artikel/create', [ArtikelController::class, 'create'])->middleware(['auth', 'verified'])->name('artikel.create');
Route::post('/artikel/store', [ArtikelController::class, 'store'])->middleware(['auth', 'verified'])->name('artikel.store');
Route::get('/artikel/edit/{id}', [ArtikelController::class, 'edit'])->middleware(['auth', 'verified'])->name('artikel.edit');
Route::put('/artikel/update/{id}', [ArtikelController::class, 'update'])->middleware(['auth', 'verified'])->name('artikel.update');
Route::delete('/artikel/{id}', [ArtikelController::class, 'destroy'])->middleware(['auth', 'verified'])->name('artikel.destroy');
Route::get('/artikel/{id}', [ArtikelController::class, 'show'])->middleware(['auth', 'verified'])->name('artikel.show');

Route::get('/foto-layanan', [FotoLayananController::class, 'index'])->middleware(['auth', 'verified'])->name('fotoLayanan');
Route::put('/foto-layanan/update/{id}', [FotoLayananController::class, 'update'])->middleware(['auth', 'verified'])->name('fotoLayanan.update');
Route::delete('/foto-layanan/{id}', [FotoLayananController::class, 'destroy'])->middleware(['auth', 'verified'])->name('fotoLayanan.destroy');

Route::get('/users', [UsersController::class, 'index'])->name('users');

Route::get('/setting', [SettingController::class, 'index'])->name('setting');
Route::post('/setting', [SettingController::class, 'store'])->name('setting.store');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
