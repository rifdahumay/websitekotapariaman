<?php

namespace App\Http\Controllers\BE;

use Illuminate\Http\Request;
use App\Models\News;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Storage;

class BE_NewsController extends Controller
{
    public function index()
    {
        $news = News::orderBy('published_at', 'desc')->get();
        $totalNews = News::count();
        return view('admin.news.home', compact(['news', 'totalNews']));
    }

    public function create()
    {
        return view('admin.news.create');
    }

    public function save(Request $request)
    {
        // Validasi data input
        $validation = $request->validate([
            'title' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'description' => 'required|string',
            'penulis' => 'required|string|max:255',
            'published_at' => 'required|date',
        ]);

        // Cek jika ada gambar diupload
        if ($request->hasFile('image')) {
            // Periksa apakah gambar valid
            if (!$request->file('image')->isValid()) {
                session()->flash('error', 'The image upload failed.');
                return redirect(route('admin.news/create'));
            }

            // Jika gambar valid, lanjutkan untuk menyimpan
            $validation['image'] = $request->file('image')->store('news_images', 'public');
        }

        // Simpan data ke database
        $data = News::create($validation);

        // Cek apakah data berhasil disimpan
        if ($data) {
            session()->flash('success', 'News added successfully');
            return redirect(route('admin/news'));
        } else {
            session()->flash('error', 'Some problem occurred');
            return redirect(route('admin.news/create'));
        }
    }

    public function edit($id)
    {
        $news = News::findOrFail($id);
        return view('admin.news.update', compact('news'));
    }

    public function update(Request $request, $id)
    {
        // Validasi input dari pengguna
        $validated = $request->validate([
            'title' => 'required',
            'category' => 'required',
            'description' => 'required',
            'penulis' => 'required',
            'published_at' => 'required|date',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',  // Jika ada gambar baru
        ]);

        // Temukan berita berdasarkan ID
        $news = News::findOrFail($id);

        // Set nilai-nilai yang diperbarui
        $news->title = $validated['title'];
        $news->category = $validated['category'];
        $news->description = $validated['description'];
        $news->penulis = $validated['penulis'];
        $news->published_at = $validated['published_at'];

        // Jika ada gambar baru yang diupload, simpan dan update
        if ($request->hasFile('image')) {
            // Periksa apakah gambar valid
            if (!$request->file('image')->isValid()) {
                session()->flash('error', 'The image upload failed.');
                return redirect(route('admin/news/edit', ['id' => $news->id]));
            }

            // Hapus gambar lama jika ada
            if ($news->image && Storage::exists('public/news_images/' . $news->image)) {
                Storage::delete('public/news_images/' . $news->image);
            }

            // Simpan gambar baru menggunakan storage Laravel
            $imageName = time() . '.' . $request->image->extension();
            $request->image->storeAs('news_images', $imageName, 'public');

            // Update nama file gambar
            $news->image = $imageName;
        }

        // Simpan perubahan
        $data = $news->save();

        // Cek apakah data berhasil disimpan
        if ($data) {
            session()->flash('success', 'News Updated Successfully');
            return redirect(route('admin/news'));
        } else {
            session()->flash('error', 'Some problem occurred');
            return redirect(route('admin/news/edit', ['id' => $news->id]));
        }
    }


    public function delete($id)
    {
        $news = News::findOrFail($id);
        
        // Menghapus gambar jika ada, jika gambar disimpan di server
        if ($news->image && file_exists(public_path('storage/news_images/' . $news->image))) {
            unlink(public_path('storage/news_images/' . $news->image));
        }

        // Menghapus berita dari database
        $data = $news->delete();
        
        if ($data) {
            session()->flash('success', 'News Deleted Successfully');
            return redirect(route('admin/news'));
        } else {
            session()->flash('error', 'News Not Deleted Successfully');
            return redirect(route('admin/news'));
        }
    }

}