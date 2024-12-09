<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LegislatifController extends Controller
{
    public function index()
    {
        $anggota = [
            [
                'id' => 1,
                'foto' => 'https://via.placeholder.com/300x200.png?text=Foto+Ketua+DPRD',
                'nama' => 'Ngatimin van der Woodsen',
                'jabatan' => 'Ketua DPRD',
                'periode' => '2021 - 2026',
                'deskripsi' => 'Bapak Ketua DPRD memimpin Dewan Perwakilan Rakyat Daerah Kota Pariaman.',
            ],
            [
                'id' => 2,
                'foto' => 'https://via.placeholder.com/300x200.png?text=Foto+Wakil+Ketua+DPRD',
                'nama' => 'Ngatimin van der Woodsen',
                'jabatan' => 'Wakil Ketua DPRD',
                'periode' => '2021 - 2026',
                'deskripsi' => 'Ibu Wakil Ketua DPRD membantu tugas Ketua DPRD.',
            ],
            [
                'id' => 3,
                'foto' => 'https://via.placeholder.com/300x200.png?text=Foto+Anggota+DPRD',
                'nama' => 'Ngatimin van der Woodsen',
                'jabatan' => 'Anggota DPRD',
                'periode' => '2021 - 2026',
                'deskripsi' => 'Bapak Anggota DPRD bertugas dalam pembahasan kebijakan dan pengawasan pemerintahan.',
            ],
        ];

        return view('pemerintahan.legislatif', compact('anggota'));
    }
}
