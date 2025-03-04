<?php

namespace App\Http\Controllers\FE\ProfilKota;

use App\Http\Controllers\Controller;
use App\Models\Profil_kota\Demografi;
use Illuminate\Http\Request;

class DemografiController extends Controller
{
    public function showDemografi()
    {
        $demografi = Demografi::all();
        return view('partials.profil_kota.demografi', compact('demografi'));
    }
}
