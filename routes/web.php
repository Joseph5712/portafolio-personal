<?php

use App\Http\Controllers\TechnologyController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('home');
// });

//Route::resource('technologies', TechnologyController::class);

Route::group(['prefix' => '/technologies'], function () {
    Route::get('/', [TechnologyController::class, 'index'])->name('index');
});

