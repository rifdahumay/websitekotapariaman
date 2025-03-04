<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profil_kota\Sejarah;

class SejarahController extends Controller
{
    public function index()
    {
        $sejarah = Sejarah::orderBy('id', 'desc')->get();
        $total = Sejarah::count();
        return view('admin.profil_kota.sejarah.home', compact('sejarah', 'total'));
    }

    public function create()
    {
        return view('admin.profil_kota.sejarah.create');
    }

    public function save(Request $request)
    {
        $validation = $request->validate([
            'title' => 'required',
            'asal_usul' => 'nullable',
            'perkembangan_sejarah' => 'nullable',
            'kota_pariaman_saat_ini' => 'nullable',
        ]);

        $data = Sejarah::create($validation);
        
        if ($data) {
            session()->flash('success', 'Sejarah Added Successfully');
            return redirect(route('admin/profil_kota/sejarah'));
        } else {
            session()->flash('error', 'Some problem occurred');
            return redirect(route('admin/profil_kota/sejarah/create'));
        }
    }

    public function edit($id)
    {
        $sejarah = Sejarah::findOrFail($id);
        return view('admin.profil_kota.sejarah.update', compact('sejarah'));
    }

    public function update(Request $request, $id)
    {
        $sejarah = Sejarah::findOrFail($id);

        $validation = $request->validate([
            'title' => 'required',
            'asal_usul' => 'nullable',
            'perkembangan_sejarah' => 'nullable',
            'kota_pariaman_saat_ini' => 'nullable',
        ]);

        $sejarah->fill($validation);
        $data = $sejarah->save();

        if ($data) {
            session()->flash('success', 'Sejarah Updated Successfully');
            return redirect(route('admin/profil_kota/sejarah'));
        } else {
            session()->flash('error', 'Some problem occurred');
            return redirect(route('admin/profil_kota/sejarah/edit', $id));
        }
    }

    public function delete($id)
    {
        $sejarah = Sejarah::findOrFail($id)->delete();
        
        if ($sejarah) {
            session()->flash('success', 'Sejarah Deleted Successfully');
            return redirect(route('admin/profil_kota/sejarah'));
        } else {
            session()->flash('error', 'Sejarah Not Deleted Successfully');
            return redirect(route('admin/profil_kota/sejarah'));
        }
    }
}