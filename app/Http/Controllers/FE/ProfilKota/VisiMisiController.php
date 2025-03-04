<?php

namespace App\Http\Controllers\Fe\ProfilKota;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Profil_kota\Visi_Misi;

class VisiMisiController extends Controller
{
    public function showVisiMisi()
    {
        $visi_misi = Visi_Misi::all();
        return view('partials.profil_kota.visimisi', compact('visi_misi'));
    }
}