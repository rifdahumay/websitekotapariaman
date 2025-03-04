<?php
// app/Http/Controllers/NewsController.php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        // Mengambil semua data berita dari database
        $news = News::all();

        // Mengirim data berita ke view
        return view('berita.index', compact('news'));
    }

    public function show($id)
    {
        $article = News::findOrFail($id);
        return view('berita.show', compact('article'));
    }

}
