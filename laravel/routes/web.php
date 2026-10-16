<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\MataKuliahController;

Route::get('/test', function () {
    return 'test berhasil';
});

Route::get('/', function () {
    return redirect()->route('mahasiswa.index');
});

Route::prefix('admin')->group(function () {
    Route::resource('mahasiswa', MahasiswaController::class);
    Route::resource('mata-kuliah', MataKuliahController::class);
});