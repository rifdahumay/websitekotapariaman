<?php

namespace App\Http\Controllers;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

use Illuminate\Http\Request;


class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}




class AgendaController extends Controller
{
    public function index()
    {
        $pengumuman = [
            ['judul' => 'Pengumuman 1', 'waktu' => '18 Jam Lalu', 'deskripsi' => 'Deskripsi pengumuman 1.'],
            ['judul' => 'Pengumuman 2', 'waktu' => '1 Hari Lalu', 'deskripsi' => 'Deskripsi pengumuman 2.'],
        ];

        return view('landing', compact('pengumuman'));
    }
}


