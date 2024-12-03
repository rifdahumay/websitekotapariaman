<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $services = array(
            'all' => array(
                array('title' => 'E-Absensi', 'type' => 'Aplikasi', 'image' => '/logos/Lambang_Kota_Pariaman.png', 'description' => 'Sistem absensi berbasis digital untuk pegawai.', 'link' => '#'),
                array('title' => 'LAPORSP4N', 'type' => 'Website', 'image' => '/logos/Lambang_Kota_Pariaman.png', 'description' => 'Layanan pengaduan masyarakat berbasis online.', 'link' => '#'),
                array('title' => 'PPID Management', 'type' => 'Pelayanan', 'image' => '/logos/Lambang_Kota_Pariaman.png', 'description' => 'Sistem pengelolaan informasi publik.', 'link' => '#')
            ),
            'applications' => array(
                array('title' => 'E-Absensi', 'type' => 'Aplikasi', 'image' => '/logos/Lambang_Kota_Pariaman.png', 'description' => 'Sistem absensi berbasis digital untuk pegawai.', 'link' => '#'),
                array('title' => 'E-Surat', 'type' => 'Aplikasi', 'image' => '/logos/Lambang_Kota_Pariaman.png', 'description' => 'Sistem manajemen surat masuk dan keluar.', 'link' => '#'),
                array('title' => 'E-Budgeting', 'type' => 'Aplikasi', 'image' => '/logos/Lambang_Kota_Pariaman.png', 'description' => 'Aplikasi pengelolaan anggaran berbasis elektronik.', 'link' => '#')
            ),
            'services' => array(
                array('title' => 'PPID Management', 'type' => 'Pelayanan', 'image' => '/logos/Lambang_Kota_Pariaman.png', 'description' => 'Sistem pengelolaan informasi publik.', 'link' => '#'),
                array('title' => 'Layanan Perizinan', 'type' => 'Pelayanan', 'image' => '/logos/Lambang_Kota_Pariaman.png', 'description' => 'Proses pengurusan izin secara online.', 'link' => '#'),
                array('title' => 'Layanan Kependudukan', 'type' => 'Pelayanan', 'image' => '/logos/Lambang_Kota_Pariaman.png', 'description' => 'Pengelolaan data dan dokumen kependudukan.', 'link' => '#')
            ),
            'websites' => array(
                array('title' => 'LAPORSP4N', 'type' => 'Website', 'image' => '/logos/Lambang_Kota_Pariaman.png', 'description' => 'Layanan pengaduan masyarakat berbasis online.', 'link' => '#'),
                array('title' => 'SIPKD', 'type' => 'Website', 'image' => '/logos/Lambang_Kota_Pariaman.png', 'description' => 'Sistem informasi keuangan daerah.', 'link' => '#'),
                array('title' => 'E-Perizinan', 'type' => 'Website', 'image' => '/logos/Lambang_Kota_Pariaman.png', 'description' => 'Portal perizinan online pemerintah daerah.', 'link' => '#')
            )
        );

        // Mengirim data ke view
        return view('informasi.layanan', compact('services'));
    }
}
