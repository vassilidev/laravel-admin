<?php

use Illuminate\Support\Facades\Route;

//There is no front-end, feel free to build your own !
Route::redirect('/', 'login');

//All your dashboard's routes going to be here.
Route::group([
    'as'         => 'panel.',
    'middleware' => [
        'verified',
    ],
], static function () {
    Route::view('dashboard', 'pages.panel.dashboard')->name('dashboard');
});
