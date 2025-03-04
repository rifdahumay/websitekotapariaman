<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profil_kota\Demografi;

class DemografiController extends Controller
{
    public function index()
    {
        $demografi = Demografi::orderBy('id', 'desc')->get();
        $total = Demografi::count();
        return view('admin.profil_kota.demografi.home', compact('demografi', 'total'));
    }

    public function create()
    {
        return view('admin.profil_kota.demografi.create');
    }

    public function save(Request $request)
    {
        $validation = $request->validate([
            'title' => 'required',
            'jumlah_penduduk' => 'required',
            'struktur_umur' => 'required',
            'komposisi_etnis' => 'required',
            'sebaran_agama' => 'required'
        ]);
        $data = Demografi::create($validation);
        if ($data) {
            session()->flash('success', 'Demografi Added Successfully');
            return redirect(route('admin/profil_kota/demografi'));
        } else {
            session()->flash('error', 'Some problem occurred');
            return redirect(route('admin/profil_kota/demografi/create'));
        }
    }

    public function edit($id)
    {
        $demografi = Demografi::findOrFail($id);
        return view('admin.profil_kota.demografi.update', compact('demografi'));
    }

    public function update(Request $request, $id)
    {
        $demografi = Demografi::findOrFail($id);
        $demografi->title = $request->title;
        $demografi->jumlah_penduduk = $request->jumlah_penduduk;
        $demografi->struktur_umur = $request->struktur_umur;
        $demografi->komposisi_etnis = $request->komposisi_etnis;
        $demografi->sebaran_agama = $request->sebaran_agama;
        $data = $demografi->save();
        if ($data) {
            session()->flash('success', 'Demografi Updated Successfully');
            return redirect(route('admin/profil_kota/demografi'));
        } else {
            session()->flash('error', 'Some problem occurred');
            return redirect(route('admin/profil_kota/demografi/edit', $id));
        }
    }

    public function delete($id)
    {
        $demografi = Demografi::findOrFail($id)->delete();
        if ($demografi) {
            session()->flash('success', 'Demografi Deleted Successfully');
            return redirect(route('admin/profil_kota/demografi'));
        } else {
            session()->flash('error', 'Demografi Not Deleted Successfully');
            return redirect(route('admin/profil_kota/demografi'));
        }
    }
}
