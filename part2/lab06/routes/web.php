<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::group(['prefix' => 'trips'], function () {
    Route::get('/', [TripController::class, 'index'])->name('trips.index');
    Route::get('/{id}', [TripController::class, 'show'])->name('trips.show');
});

