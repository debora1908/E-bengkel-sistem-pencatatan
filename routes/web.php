<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KendaraanController;


Route::get('/', function () {
    return redirect()->route('kendaraan.index');
});


Route::resource('kendaraan', KendaraanController::class);