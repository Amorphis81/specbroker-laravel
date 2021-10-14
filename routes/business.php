<?php

use App\Http\Controllers\BusinessController;

Route::get('/business', [BusinessController::class, 'index'])->name('business.index');
Route::get('/business/create', [BusinessController::class, 'create'])->name('business.create');
Route::post('/business', [BusinessController::class, 'store'])->name('business.store');
Route::get('/business/{business}', [BusinessController::class, 'show'])->name('business.show');
Route::get('/business/{business}', [BusinessController::class, 'update'])->name('business.update');
Route::delete('/business/{business}', [BusinessController::class, 'destroy'])->name('business.destroy');
