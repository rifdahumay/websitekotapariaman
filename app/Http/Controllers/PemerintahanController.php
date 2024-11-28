<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PemerintahanController extends Controller
{
    public function eksekutif() {
        return view('pemerintahan.eksekutif');
    }
    
    public function legislatif() {
        return view('pemerintahan.legislatif');
    }
    
    public function perangkatDaerah() {
        return view('pemerintahan.perangkat_daerah');
    }
    
    public function sekretariatDaerah() {
        return view('pemerintahan.sekretariat_daerah');
    }
    
    public function kecamatan() {
        return view('pemerintahan.kecamatan');
    }
    
    public function desa() {
        return view('pemerintahan.desa');
    }
    
    public function kelurahan() {
        return view('pemerintahan.kelurahan');
    }
    
}
