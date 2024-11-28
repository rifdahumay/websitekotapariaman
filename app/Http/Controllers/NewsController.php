<?php
// app/Http/Controllers/NewsController.php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class NewsController extends Controller
{
    public function index()
    {
        $apiKey = '2cc1d34077774b4cb0c6ef9c3aaebc1a';
        $url = 'https://newsapi.org/v2/top-headlines';

        $response = Http::get($url, [
            'apiKey' => $apiKey,
            'category' => 'general',
            'language' => 'en',
        ]);

        $news = $response->json();

        if (isset($news['articles'])) {
            return view('berita.index', ['news' => $news['articles']]);
        } else {
            return view('berita.index')->with('error', 'No news available.');
        }
    }
}

