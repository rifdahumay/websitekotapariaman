<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransparansiController extends Controller
{
    /**
     * Menampilkan halaman utama Transparansi.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('transparansi');
    }

    /**
     * Menampilkan halaman Informasi Anggaran.
     *
     * @return \Illuminate\View\View
     */
    public function anggaran()
    {
        return view('transparansi.anggaran');
    }

    /**
     * Menampilkan halaman Proyek dan Pengadaan.
     *
     * @return \Illuminate\View\View
     */
    public function proyek()
    {
        return view('transparansi.proyek');
    }

    /**
     * Menampilkan halaman Data Statistik.
     *
     * @return \Illuminate\View\View
     */
    public function statistik()
    {
        return view('transparansi.statistik');
    }
}
