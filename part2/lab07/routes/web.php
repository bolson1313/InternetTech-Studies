<?php

use App\Http\Controllers\TripController;
use App\Http\Controllers\CountryController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::controller(TripController::class)->group(function () {
    Route::get('/trips', 'index')->name('trips.index');
    Route::get('/trips/{id}', 'show')->name('trips.show');
});

Route::resource('countries', CountryController::class);

Route::get('/trips/{id}/edit', [TripController::class, 'edit'])->name('trips.edit');
Route::put('/trips/{id}', [TripController::class, 'update'])->name('trips.update');