<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PlacardController;
use App\Http\Controllers\MaskapaiController;
use App\Http\Controllers\PesawatController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\PartnumberController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Log;

use App\Data\PlacardDropdown;


Route::get('/', function () {
    return redirect()->route('login');
});

Route::resource('placard', PlacardController::class);
Route::resource('maskapai', MaskapaiController::class);
Route::resource('pegawai', PegawaiController::class);
Route::resource('pesawat', PesawatController::class);
Route::resource('partnumber', PartnumberController::class);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});




require __DIR__.'/auth.php';
