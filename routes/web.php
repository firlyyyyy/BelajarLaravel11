<?php

use App\Http\Controllers\HaloController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\PegawaiController;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');


// DOMPDF
Route::get('/pegawai', [PegawaiController::class, 'index']);
Route::get('/pegawai/cetak_pdf', [PegawaiController::class, 'cetak_pdf']);

// EXCEL EXPORT
Route::get('/siswa', [SiswaController::class, 'index']);
Route::get('/siswa/export_excel', [SiswaController::class, 'export_excel']);

// EXCEL IMPORT
Route::post('/siswa/import_excel', [SiswaController::class, 'import_excel']);

// LOCALIZATION
Route::get('/{locale}/form', function ($locale) {
    App::setlocale($locale);
    return view('biodata');
});

// ACTION URL
Route::get('halo/{nama}', [HaloController::class, 'halo']);
Route::get('halo', [HaloController::class, 'panggil']);

require __DIR__.'/auth.php';
