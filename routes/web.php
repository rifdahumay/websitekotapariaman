<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('splash'); 
});

Route::get('/home', function () {
    return view('home'); 
});

Route::get('/landing', function () {
    return view('landing');  
});

Route::get('/kirim-pesan', function () {
    return view('kirim-pesan');
});

use App\Http\Controllers\PesanController;

Route::post('/kirim-pesan', [PesanController::class, 'store'])->name('pesan.store');

Route::get('/profil-kota/visimisi', function () {
    return view('partials.profil_kota.visimisi'); 
});
Route::get('/profil-kota/sejarah', function () {
    return view('partials.profil_kota.sejarah'); 
});
Route::get('/profil-kota/lambang', function () {
    return view('partials.profil_kota.lambang'); 
});
Route::get('/profil-kota/geografis', function () {
    return view('partials.profil_kota.geografis'); 
});
Route::get('/profil-kota/demografi', function () {
    return view('partials.profil_kota.demografi'); 
});



Route::get('/profil_kota/visimisi', function () {
    return view('partials.profil_kota.visimisi');
})->name('profil_kota.visimisi');
Route::get('/profil_kota/sejarah', function () {
    return view('partials.profil_kota.sejarah');
})->name('profil_kota.sejarah');
Route::get('/profil_kota/lambang', function () {
    return view('partials.profil_kota.lambang');
})->name('profil_kota.lambang');
Route::get('/profil_kota/geografis', function () {
    return view('partials.profil_kota.geografis');
})->name('profil_kota.geografis');
Route::get('/profil_kota/demografi', function () {
    return view('partials.profil_kota.demografi');
})->name('profil_kota.demografi');


use App\Http\Controllers\NewsController;

Route::get('/berita', [NewsController::class, 'index'])->name('berita.index');







