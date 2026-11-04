<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MatakuliahController;
use App\Http\Controllers\AbsensiController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('matakuliah', MatakuliahController::class);

Route::resource('absensi', AbsensiController::class)->only([
    'index', 'create', 'store'
]);