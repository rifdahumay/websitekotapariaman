<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataTerkiniController extends Controller
{
    public function index()
    {
        // Data dummy
        $data = [
            [
                'title' => 'Data A',
                'description' => 'Ini adalah deskripsi Data A yang sangat menarik.',
                'image' => 'logos/Cover image.png',
                'date' => '2024-12-01'
            ],
            [
                'title' => 'Data B',
                'description' => 'Deskripsi Data B dengan informasi penting.',
                'image' => 'logos/Cover image.png',
                'date' => '2024-12-02'
            ],
            [
                'title' => 'Data C',
                'description' => 'Penjelasan singkat tentang Data C.',
                'image' => 'logos/Cover image.png',
                'date' => '2024-12-03'
            ],
            [
                'title' => 'Data D',
                'description' => 'Ini adalah deskripsi Data D yang sangat menarik.',
                'image' => 'logos/Cover image.png',
                'date' => '2024-12-01'
            ],
            [
                'title' => 'Data E',
                'description' => 'Deskripsi Data E dengan informasi penting.',
                'image' => 'logos/Cover image.png',
                'date' => '2024-12-02'
            ],
            [
                'title' => 'Data F',
                'description' => 'Penjelasan singkat tentang Data F.',
                'image' => 'logos/Cover image.png',
                'date' => '2024-12-03'
            ],
        ];

        // Statistik data
        $statistics = [
            'total_items' => count($data),
            'last_updated' => now()->toDateString(), // Tanggal hari ini
        ];

        // Kirim data ke view
        return view('data-terkini', compact('data', 'statistics'));
    }
}
