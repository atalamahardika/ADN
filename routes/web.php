<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\PublikasiController;
use App\Models\Berita;

Route::get('/', function () {
    $beritas = Berita::latest()->take(8)->get();
    return view('pages.landing', compact('beritas'));
});
Route::get('/tridharma', function ()  {
    return view('pages.tridharma');
});
Route::get('/publikasi', function() {
    return view('pages.publication');
});
Route::get('/divisi', function() {
    return view('pages.division');
});


Route::get('/berita', [BeritaController::class, 'index'])->name('news.index');
Route::get('/berita/{slug}', [BeritaController::class, 'show'])->name('news.show-detail');

Route::get('/publikasi', [PublikasiController::class, 'index'])->name('publikasi.index');