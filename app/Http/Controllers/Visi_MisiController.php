<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profil_kota\Visi_Misi;

class Visi_MisiController extends Controller
{
    public function index()
    {
        $visi_misi = Visi_Misi::orderBy('created_at', 'desc')->get();
        $totalVisiMisi = Visi_Misi::count(); 
        return view('admin/profil_kota/visi_misi/home', compact(['visi_misi', 'totalVisiMisi']));
    }

    public function create()
    {
        return view('admin/profil_kota/visi_misi/create');
    }

    public function save(Request $request)
    {
        // Validasi data
        $validation = $request->validate([
            'title' => 'required|string|max:255',
            'visi' => 'required|string',
            'misi' => 'required|string',
        ]);

        // Menyimpan data jika validasi berhasil
        $data = Visi_Misi::create($validation);

        // Memeriksa apakah data berhasil disimpan
        if ($data) {
            session()->flash('success', 'Visi & Misi berhasil ditambahkan');
            return redirect(route('admin/profil_kota/visi_misi'));
        } else {
            session()->flash('error', 'Terjadi masalah saat menyimpan data');
            return redirect(route('admin/profil_kota/visi_misi/create'));
        }
    }
    
    public function edit($id)
    {
        // Mencari data Visi_Misi berdasarkan ID
        $visi_misi = Visi_Misi::findOrFail($id);
        
        // Mengembalikan view untuk mengedit data Visi_Misi
        return view('admin/profil_kota/visi_misi/update', compact('visi_misi'));
    }

    public function delete($id)
    {
        // Mencari dan menghapus data Visi_Misi berdasarkan ID
        $visi_misi = Visi_Misi::findOrFail($id);
        $deleteStatus = $visi_misi->delete();
        
        // Cek apakah data berhasil dihapus
        if ($deleteStatus) {
            session()->flash('success', 'Visi & Misi Deleted Successfully');
            return redirect(route('admin/profil_kota/visi_misi'));
        } else {
            session()->flash('error', 'Failed to Delete Visi & Misi');
            return redirect(route('admin/profil_kota/visi_misi'));
        }
    }

    public function update(Request $request, $id)
    {
        // Mencari data Visi_Misi berdasarkan ID
        $visi_misi = Visi_Misi::findOrFail($id);
        
        // Mengambil data dari request
        $title = $request->title;
        $visi = $request->visi;
        $misi = $request->misi;

        // Memperbarui data Visi_Misi
        $visi_misi->title = $title;
        $visi_misi->visi = $visi;
        $visi_misi->misi = $misi;
        
        // Menyimpan perubahan ke database
        $updateStatus = $visi_misi->save();
        
        // Cek apakah data berhasil diperbarui
        if ($updateStatus) {
            session()->flash('success', 'Visi & Misi Updated Successfully');
            return redirect(route('admin/profil_kota/visi_misi'));
        } else {
            session()->flash('error', 'Failed to Update Visi & Misi');
            return redirect(route('admin/profil_kota/visi_misi/edit', ['id' => $id]));
        }
    }
}
