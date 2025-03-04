<?php

use App\Http\Controllers\BE\BE_NewsController;
use App\Http\Controllers\DemografiController;
use App\Http\Controllers\FE\ProfilKota\FE_SejarahController as ProfilKotaFE_SejarahController;
use App\Http\Controllers\FE\ProfilKota\HistoryController;
use App\Http\Controllers\FE\ProfilKota\SejarahController as ProfilKotaSejarahController;
use App\Http\Controllers\GeografisController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LambangKotaController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SejarahController;
use App\Http\Controllers\Visi_MisiController;

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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('admin/dashboard', [HomeController::class, 'index'])->name('admin.dashboard');
    
    // Route Berita
    Route::get('/admin/news', [BE_NewsController::class, 'index'])->name('admin/news');
    Route::get('/admin/news/create', [BE_NewsController::class, 'create'])->name('admin/news/create');
    Route::post('/admin/news/save', [BE_NewsController::class, 'save'])->name('admin/news/save');
    Route::get('/admin/news/edit/{id}', [BE_NewsController::class, 'edit'])->name('admin/news/edit');
    Route::put('/admin/news/edit/{id}', [BE_NewsController::class, 'update'])->name('admin/news/update');
    Route::get('/admin/news/delete/{id}', [BE_NewsController::class, 'delete'])->name('admin/news/delete');

    // Route Profil Kota
    // Visi Misi
    Route::get('admin/profil_kota/visi_misi', [Visi_MisiController::class, 'index'])->name('admin/profil_kota/visi_misi');
    Route::get('admin/profil_kota/visi_misi/create', [Visi_MisiController::class, 'create'])->name('admin/profil_kota/visi_misi/create');
    Route::post('admin/profil_kota/visi_misi/save', [Visi_MisiController::class, 'save'])->name('admin/profil_kota/visi_misi/save');
    Route::get('admin/profil_kota/visi_misi/edit/{id}', [Visi_MisiController::class, 'edit'])->name('admin/profil_kota/visi_misi/edit');
    Route::put('admin/profil_kota/visi_misi/edit/{id}', [Visi_MisiController::class, 'update'])->name('admin/profil_kota/visi_misi/update');
    Route::get('admin/profil_kota/visi_misi/delete/{id}', [Visi_MisiController::class, 'delete'])->name('admin/profil_kota/visi_misi/delete');

    // Sejarah
    Route::get('admin/profil_kota/sejarah', [SejarahController::class, 'index'])->name('admin/profil_kota/sejarah');
    Route::get('admin/profil_kota/sejarah/create', [SejarahController::class, 'create'])->name('admin/profil_kota/sejarah/create');
    Route::post('admin/profil_kota/sejarah/save', [SejarahController::class, 'save'])->name('admin/profil_kota/sejarah/save');
    Route::get('admin/profil_kota/sejarah/edit/{id}', [SejarahController::class, 'edit'])->name('admin/profil_kota/sejarah/edit');
    Route::put('admin/profil_kota/sejarah/edit/{id}', [SejarahController::class, 'update'])->name('admin/profil_kota/sejarah/update');
    Route::get('admin/profil_kota/sejarah/delete/{id}', [SejarahController::class, 'delete'])->name('admin/profil_kota/sejarah/delete');

    // Lambang Kota
    Route::get('admin/profil_kota/lambang_kota', [LambangKotaController::class, 'index'])->name('admin/profil_kota/lambang_kota');
    Route::get('admin/profil_kota/lambang_kota/create', [LambangKotaController::class, 'create'])->name('admin/profil_kota/lambang_kota/create');
    Route::post('admin/profil_kota/lambang_kota/save', [LambangKotaController::class, 'save'])->name('admin/profil_kota/lambang_kota/save');
    Route::get('admin/profil_kota/lambang_kota/edit/{id}', [LambangKotaController::class, 'edit'])->name('admin/profil_kota/lambang_kota/edit');
    Route::put('admin/profil_kota/lambang_kota/edit/{id}', [LambangKotaController::class, 'update'])->name('admin/profil_kota/lambang_kota/update');
    Route::get('admin/profil_kota/lambang_kota/delete/{id}', [LambangKotaController::class, 'delete'])->name('admin/profil_kota/lambang_kota/delete');

    // Geografis
    Route::get('admin/profil_kota/geografis', [GeografisController::class, 'index'])->name('admin/profil_kota/geografis');
    Route::get('admin/profil_kota/geografis/create', [GeografisController::class, 'create'])->name('admin/profil_kota/geografis/create');
    Route::post('admin/profil_kota/geografis/save', [GeografisController::class, 'save'])->name('admin/profil_kota/geografis/save');
    Route::get('admin/profil_kota/geografis/edit/{id}', [GeografisController::class, 'edit'])->name('admin/profil_kota/geografis/edit');
    Route::put('admin/profil_kota/geografis/edit/{id}', [GeografisController::class, 'update'])->name('admin/profil_kota/geografis/update');
    Route::get('admin/profil_kota/geografis/delete/{id}', [GeografisController::class, 'delete'])->name('admin/profil_kota/geografis/delete');

    // Demografi 
    Route::get('admin/profil_kota/demografi', [DemografiController::class, 'index'])->name('admin/profil_kota/demografi');
    Route::get('admin/profil_kota/demografi/create', [DemografiController::class, 'create'])->name('admin/profil_kota/demografi/create');
    Route::post('admin/profil_kota/demografi/save', [DemografiController::class, 'save'])->name('admin/profil_kota/demografi/save');
    Route::get('admin/profil_kota/demografi/edit/{id}', [DemografiController::class, 'edit'])->name('admin/profil_kota/demografi/edit');
    Route::put('admin/profil_kota/demografi/update/{id}', [DemografiController::class, 'update'])->name('admin/profil_kota/demografi/update');
    Route::get('admin/profil_kota/demografi/delete/{id}', [DemografiController::class, 'delete'])->name('admin/profil_kota/demografi/delete');
});

require __DIR__.'/auth.php';

// Route::get('admin/dashboard', [HomeController::class, 'index']);
// Route::get('admin/dashboard', [HomeController::class, 'index'])->middleware(['auth', 'admin']);

use App\Http\Controllers\PesanController;

Route::post('/kirim-pesan', [PesanController::class, 'store'])->name('pesan.store');

// Route::get('/profil-kota/visimisi', function () {
//     return view('partials.profil_kota.visimisi'); 
// });

// Route::get('/profil-kota/sejarah', function () {
//     return view('partials.profil_kota.sejarah'); 
// });

// Route::get('/profil-kota/lambang', function () {
//     return view('partials.profil_kota.lambang'); 
// });

// Route::get('/profil-kota/geografis', function () {
//     return view('partials.profil_kota.geografis'); 
// });

// Route::get('/profil-kota/demografi', function () {
//     return view('partials.profil_kota.demografi'); 
// });

use App\Http\Controllers\Fe\ProfilKota\VisiMisiController;
Route::get('/profil-kota/visimisi', [VisiMisiController::class, 'showVisiMisi'])->name('profil_kota.visimisi');
Route::get('/profil-kota/sejarah', [ProfilKotaSejarahController::class, 'showSejarah'])->name('profil_kota.sejarah');

use App\Http\Controllers\FE\ProfilKota\LambangKotaController as ProfilKotaLambangKotaController;
Route::get('/profil-kota/lambang', [ProfilKotaLambangKotaController::class, 'showLambang'])->name('profil_kota.lambang');


use App\Http\Controllers\FE\ProfilKota\GeografisController as ProfilKotaGeografisController;
Route::get('/profil-kota/geografis', [ProfilKotaGeografisController::class, 'showGeografis'])->name('profil_kota.geografis');

use App\Http\Controllers\FE\ProfilKota\DemografiController as ProfilKotaDemografiController;
Route::get('/profil-kota/demografi', [ProfilKotaDemografiController::class, 'showDemografi'])->name('profil_kota.demografi');


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
Route::get('/berita/{id}', [NewsController::class, 'show'])->name('berita.show');


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

use App\Http\Controllers\DataTerkiniController;
Route::get('/data-terkini', [DataTerkiniController::class, 'index'])->name('data-terkini');