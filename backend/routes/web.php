<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RentController;
use App\Http\Controllers\UserController;

Route::get('/', [RentController::class, 'all_index']);

Route::get('/dashboard', [RentController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::post('/dashboard/update/{id}', [RentController::class, 'update'])->name('update');
Route::get('/dashboard/edit/{id}', [RentController::class, 'edit'])->name('edit');

Route::get('/view/{id}', [RentController::class, 'view'])->name('view');

//Route::get('/dashboard', function () {
//    return view('dashboard', ['all_rent' => $all_rent]);
//})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/dashboard/create', [RentController::class, 'create'])->name('create');

Route::post('/dashboard/store', [RentController::class, 'store'])->name('store');

Route::get('/logout', [UserController::class, 'logout']);


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
