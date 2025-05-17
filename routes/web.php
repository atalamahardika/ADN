<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BeritaController;
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


Route::get('/berita', [BeritaController::class, 'index'])->name('pages.news');
Route::get('/berita/{slug}', [BeritaController::class, 'show'])->name('pages.news-detail');