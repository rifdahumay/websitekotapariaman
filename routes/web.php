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

Route::get('/landing', function () {
    return view('landing');
})->name('landing');

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


use App\Http\Controllers\PemerintahanController;

Route::prefix('pemerintahan')->name('pemerintahan.')->group(function () {
    Route::get('/eksekutif', [PemerintahanController::class, 'eksekutif'])->name('eksekutif');
    Route::get('/legislatif', [PemerintahanController::class, 'legislatif'])->name('legislatif');
    Route::get('/perangkat-daerah', [PemerintahanController::class, 'perangkatDaerah'])->name('perangkat_daerah');
    Route::get('/sekretariat-daerah', [PemerintahanController::class, 'sekretariatDaerah'])->name('sekretariat_daerah');
    Route::get('/kecamatan', [PemerintahanController::class, 'kecamatan'])->name('kecamatan');
    Route::get('/desa', [PemerintahanController::class, 'desa'])->name('desa');
    Route::get('/kelurahan', [PemerintahanController::class, 'kelurahan'])->name('kelurahan');
});


Route::get('/pemerintahan/eksekutif', function () {
    return view('pemerintahan.eksekutif');
})->name('pemerintahan.eksekutif');

Route::get('/pemerintahan/legislatif', function () {
    return view('pemerintahan.legislatif');
})->name('pemerintahan.legislatif');

Route::get('/pemerintahan/perangkat', function () {
    return view('pemerintahan.perangkat');
})->name('pemerintahan.perangkat');

Route::get('/pemerintahan/sekretariat', function () {
    return view('pemerintahan.sekretariat');
})->name('pemerintahan.sekretariat');

Route::get('/pemerintahan/kecamatan', function () {
    return view('pemerintahan.kecamatan');
})->name('pemerintahan.kecamatan');

Route::get('/pemerintahan/desa', function () {
    return view('pemerintahan.desa');
})->name('pemerintahan.desa');

Route::get('/pemerintahan/kelurahan', function () {
    return view('pemerintahan.kelurahan');
})->name('pemerintahan.kelurahan');

use App\Http\Controllers\TransparansiController;
Route::get('/transparansi', [TransparansiController::class, 'index'])->name('transparansi.index');
Route::get('/transparansi/anggaran', [TransparansiController::class, 'anggaran'])->name('transparansi.anggaran');
Route::get('/transparansi/proyek', [TransparansiController::class, 'proyek'])->name('transparansi.proyek');
Route::get('/transparansi/statistik', [TransparansiController::class, 'statistik'])->name('transparansi.statistik');

Route::view('/layanan', 'informasi.layanan')->name('layanan');
Route::view('/agenda', 'informasi.agenda')->name('agenda');
Route::view('/pengumuman', 'informasi.pengumuman')->name('pengumuman');
Route::view('/infografi', 'informasi.infografi')->name('infografi');
Route::view('/download', 'informasi.download')->name('download');
Route::view('/penghargaan', 'informasi.penghargaan')->name('penghargaan');
Route::view('/faq', 'informasi.faq')->name('faq');

use App\Http\Controllers\ServiceController;

Route::get('/layanan', [ServiceController::class, 'index'])->name('layanan');

use App\Http\Controllers\EksekutifController;

Route::get('/pemerintahan/eksekutif', [EksekutifController::class, 'index'])->name('pemerintahan.eksekutif');

use App\Http\Controllers\LegislatifController;

Route::get('/pemerintahan/legislatif', [LegislatifController::class, 'index'])->name('pemerintahan.legislatif');

Route::get('/wisata', function () {
    return view('wisata'); 
});
