<?php

namespace App\Http\Controllers\FE\ProfilKota;

use Illuminate\Http\Request;
use App\Models\Profil_kota\Sejarah;
use App\Http\Controllers\Controller;

class SejarahController extends Controller
{
    public function showSejarah()
    {
        $sejarah = Sejarah::all();
        return view('partials.profil_kota.sejarah', compact('sejarah'));
    }
}
