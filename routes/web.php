<?php

use App\Http\Controllers\Armada\ArmadaDestroyController;
use App\Http\Controllers\Armada\ArmadaStoreController;
use App\Http\Controllers\Armada\ArmadaUpdateController;
use App\Http\Controllers\Armada\ArmadaViewController;
use App\Http\Controllers\Armada\ArmadaViewStoreController;
use App\Http\Controllers\Pesanan\PesananStoreController;
use App\Http\Controllers\PesananViewStoreController;
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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('auth', 'AuthCheck:admin')->group(function () {
    Route::get('/viewArmada', ArmadaViewController::class)->middleware(['auth', 'verified'])->name('viewArmada');
    Route::get('/viewStoreArmada', ArmadaViewStoreController::class)->middleware(['auth', 'verified'])->name('viewStoreArmada');

    Route::post('/armadas', ArmadaStoreController::class)->name('armadas.store');
    Route::post('/armadasUpdate', ArmadaUpdateController::class)->name('armadas.update');
    Route::post('/armadasDestroy', ArmadaDestroyController::class)->name('armadas.destroy');
});

Route::middleware('auth', 'AuthCheck:user')->group(function () {
    Route::post('/pesanans', PesananStoreController::class)->name('pesanan.store');
    Route::get('/viewStorePesanan', PesananViewStoreController::class)->middleware(['auth', 'verified'])->name('viewStorePesanan');
});

require __DIR__ . '/auth.php';
