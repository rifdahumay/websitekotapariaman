<?php

namespace App\Http\Controllers\FE\ProfilKota;

use Illuminate\Http\Request;
use App\Models\Profil_kota\Geografis;
use App\Http\Controllers\Controller;

class GeografisController extends Controller
{
    public function showGeografis()
    {
        $geografis = Geografis::all();
        return view('partials.profil_kota.geografis', compact('geografis'));
    }
}
