<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profil_kota\Geografis;
use Illuminate\Support\Facades\Storage;

class GeografisController extends Controller
{
    public function index()
    {
        $geografis = Geografis::orderBy('id', 'desc')->get();
        $total = Geografis::count();
        return view('admin.profil_kota.geografis.home', compact('geografis', 'total'));
    }

    public function create()
    {
        return view('admin.profil_kota.geografis.create');
    }

    public function save(Request $request)
    {
        // Validation for the new fields
        $validation = $request->validate([
            'title' => 'required',
            'location_boundary' => 'nullable|string',
            'topography_climate' => 'nullable|string',
            'area_population' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',  // Image validation
        ]);

        // Handle image upload
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
        } else {
            $imagePath = null;
        }

        // Create a new Geografis entry
        $data = Geografis::create([
            'title' => $request->title,
            'location_boundary' => $request->location_boundary,
            'topography_climate' => $request->topography_climate,
            'area_population' => $request->area_population,
            'image' => $imagePath,  // Save image path
        ]);

        if ($data) {
            session()->flash('success', 'Geografis Added Successfully');
            return redirect(route('admin/profil_kota/geografis'));
        } else {
            session()->flash('error', 'Some problem occurred');
            return redirect(route('admin/profil_kota/geografis/create'));
        }
    }

    public function edit($id)
    {
        $geografis = Geografis::findOrFail($id);
        return view('admin.profil_kota.geografis.update', compact('geografis'));
    }

    public function update(Request $request, $id)
    {
        $geografis = Geografis::findOrFail($id);

        // Validation for updated fields
        $validation = $request->validate([
            'title' => 'required',
            'location_boundary' => 'nullable|string',
            'topography_climate' => 'nullable|string',
            'area_population' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',  // Image validation
        ]);

        // Handle image upload if a new image is provided
        if ($request->hasFile('image')) {
            // Delete the old image if it exists
            if ($geografis->image && Storage::exists('public/' . $geografis->image)) {
                Storage::delete('public/' . $geografis->image);
            }
            // Store the new image
            $imagePath = $request->file('image')->store('images', 'public');
        } else {
            // Keep the old image if no new image is uploaded
            $imagePath = $geografis->image;
        }

        // Update the Geografis entry
        $geografis->title = $request->title;
        $geografis->location_boundary = $request->location_boundary;
        $geografis->topography_climate = $request->topography_climate;
        $geografis->area_population = $request->area_population;
        $geografis->image = $imagePath;  // Update image path

        $data = $geografis->save();

        if ($data) {
            session()->flash('success', 'Geografis Updated Successfully');
            return redirect(route('admin/profil_kota/geografis'));
        } else {
            session()->flash('error', 'Some problem occurred');
            return redirect(route('admin/profil_kota/geografis/edit', $id));
        }
    }

    public function delete($id)
    {
        $geografis = Geografis::findOrFail($id);

        // Delete image if exists
        if ($geografis->image && Storage::exists('public/' . $geografis->image)) {
            Storage::delete('public/' . $geografis->image);
        }

        $geografis->delete();

        if ($geografis) {
            session()->flash('success', 'Geografis Deleted Successfully');
            return redirect(route('admin/profil_kota/geografis'));
        } else {
            session()->flash('error', 'Geografis Not Deleted Successfully');
            return redirect(route('admin/profil_kota/geografis'));
        }
    }
}