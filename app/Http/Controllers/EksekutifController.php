<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EksekutifController extends Controller
{
    public function index()
    {
        $pejabat = [
            [
                'id' => 1,
                'foto' => 'https://via.placeholder.com/300x200.png?text=Foto+Wali+Kota',
                'nama' => 'Ngatimin van der Woodsen',
                'jabatan' => 'Wali Kota',
                'periode' => '2021 - 2026',
                'deskripsi' => 'Bapak Wali Kota bertanggung jawab atas pelaksanaan pemerintahan Kota Pariaman.',
            ],
            [
                'id' => 2,
                'foto' => 'https://via.placeholder.com/300x200.png?text=Foto+Wakil+Wali+Kota',
                'nama' => 'Ngatimin van der Woodsen',
                'jabatan' => 'Wakil Wali Kota',
                'periode' => '2021 - 2026',
                'deskripsi' => 'Ibu Wakil Wali Kota membantu tugas Wali Kota dalam menjalankan pemerintahan.',
            ],
            [
                'id' => 3,
                'foto' => 'https://via.placeholder.com/300x200.png?text=Foto+Sekretaris+Daerah',
                'nama' => 'Ngatimin van der Woodsen',
                'jabatan' => 'Sekretaris Daerah',
                'periode' => '2021 - 2026',
                'deskripsi' => 'Bapak Sekretaris Daerah mengoordinasikan perangkat daerah.',
            ],
        ];

        return view('pemerintahan.eksekutif', compact('pejabat'));
    }
}
