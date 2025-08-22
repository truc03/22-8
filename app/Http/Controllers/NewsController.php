<?php

namespace App\Http\Controllers;

use App\Models\News;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::orderBy('created_at', 'desc')->get(); // tin mới nhất trước
        return view('news.index', compact('news'));
    }
}
