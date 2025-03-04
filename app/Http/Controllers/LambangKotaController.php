<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profil_kota\Lambang_Kota;
use Illuminate\Support\Facades\Storage;

class LambangKotaController extends Controller
{
    public function index()
    {
        $lambang_kota = Lambang_Kota::orderBy('id', 'desc')->get();
        $total = Lambang_Kota::count();
        return view('admin.profil_kota.lambang_kota.home', compact('lambang_kota', 'total'));
    }

    public function create()
    {
        return view('admin.profil_kota.lambang_kota.create');
    }

    public function save(Request $request)
    {
        // Validasi input
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',  // Validasi untuk gambar
            'deskripsi' => 'required|string',
        ]);

        // Menyimpan gambar
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images/lambang_kota', 'public');
        }

        // Membuat entri baru di database
        $lambang_kota = new Lambang_Kota();
        $lambang_kota->image = $imagePath;  
        $lambang_kota->deskripsi = $request->deskripsi;  
        $lambang_kota->save();

        // Redirect dengan pesan sukses
        session()->flash('success', 'Lambang Kota Added Successfully');
        return redirect(route('admin/profil_kota/lambang_kota'));
    }

    public function edit($id)
    {
        $lambang_kota = Lambang_Kota::findOrFail($id);
        return view('admin/profil_kota/lambang_kota/update', compact('lambang_kota'));
    }

    public function update(Request $request, $id)
    {
        $lambang_kota = Lambang_Kota::findOrFail($id);

        // Cek jika ada gambar baru yang di-upload
        if ($request->hasFile('image')) {
            // Hapus gambar lama jika ada
            if ($lambang_kota->image && Storage::exists('public/' . $lambang_kota->image)) {
                Storage::delete('public/' . $lambang_kota->image);
            }
            
            // Simpan gambar baru
            $imagePath = $request->file('image')->store('images/lambang_kota', 'public');
            $lambang_kota->image = $imagePath;  
        }

        // Update deskripsi
        $lambang_kota->deskripsi = $request->deskripsi;
        $lambang_kota->save();

        // Redirect dengan pesan sukses
        session()->flash('success', 'Lambang Kota Updated Successfully');
        return redirect(route('admin/profil_kota/lambang_kota'));
    }

    public function delete($id)
    {
        $lambang_kota = Lambang_Kota::findOrFail($id);

        // Hapus gambar jika ada
        if ($lambang_kota->image && Storage::exists('public/' . $lambang_kota->image)) {
            Storage::delete('public/' . $lambang_kota->image);
        }

        // Hapus data lambang kota
        $lambang_kota->delete();

        // Redirect dengan pesan sukses
        session()->flash('success', 'Lambang Kota Deleted Successfully');
        return redirect(route('admin/profil_kota/lambang_kota'));
    }
}