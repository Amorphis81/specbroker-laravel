<?php

Route::prefix('admin')->middleware(['auth', 'active'])->group(function () {
    Route::view('/', 'admin.index')->name('admin.index');
});
