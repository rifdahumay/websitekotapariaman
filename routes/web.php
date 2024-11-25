<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('splash'); // Splash screen sebagai halaman awal
});

Route::get('/home', function () {
    return view('home'); // Halaman utama
});

Route::get('/landing', function () {
    return view('landing');  // Halaman landing page yang baru dibuat
});

Route::get('/kirim-pesan', function () {
    return view('kirim-pesan'); // Buat halaman 'kirim-pesan.blade.php'
});

use App\Http\Controllers\PesanController;

Route::post('/kirim-pesan', [PesanController::class, 'store'])->name('pesan.store');

Route::get('/news/{id}', [NewsController::class, 'show'])->name('news.show');


