<?php

use App\Http\Controllers\BusinessController;

Route::get('/businesses', [BusinessController::class, 'index'])->name('businesses.index');
Route::get('/businesses/create', [BusinessController::class, 'create'])->name('businesses.create');
Route::post('/businesses', [BusinessController::class, 'store'])->name('businesses.store');
Route::get('/businesses/{business}', [BusinessController::class, 'show'])->name('businesses.show');
Route::get('/businesses/{business}/edit', [BusinessController::class, 'edit'])->name('businesses.edit');
Route::put('/businesses/{business}', [BusinessController::class, 'update'])->name('businesses.update');
Route::delete('/businesses/{business}', [BusinessController::class, 'destroy'])->name('businesses.destroy');
