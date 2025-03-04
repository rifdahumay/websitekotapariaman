<?php

namespace App\Http\Controllers\FE\ProfilKota;

use Illuminate\Http\Request;
use App\Models\Profil_kota\Lambang_Kota;
use App\Http\Controllers\Controller;

class LambangKotaController extends Controller
{
    public function showLambang()
    {
        $lambang_kota = Lambang_Kota::all(); 
        return view('partials.profil_kota.lambang', compact('lambang_kota'));
    }
}
