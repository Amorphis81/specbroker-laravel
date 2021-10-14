<?php

Route::prefix('user')->middleware(['auth', 'active'])->group(function () {
    Route::view('/', 'user.index')->name('user.index');
    Route::view('/my-announcements', 'user.my-announcements')->name('user.announce');
    Route::view('/favorites', 'user.favorites')->name('user.favorites');
    Route::view('/setup', 'user.setup')->name('user.setup');
});
