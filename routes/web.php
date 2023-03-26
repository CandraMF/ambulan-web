<?php

use App\Http\Controllers\AmbulanController;
use App\Http\Controllers\FotoAmbulanController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\ProfileController;
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

Route::get('/', function () {
    return view('landing');
});

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
Route::delete('/foto-ambulan/{id}', [FotoAmbulanController::class, 'destroy'])->middleware(['auth', 'verified'])->name('foto.destroy');

Route::get('/users', [UsersController::class, 'index'])->name('users');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
