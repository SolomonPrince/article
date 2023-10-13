<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    public function index()
    {
        return view('welcome')->with('articles', Article::latest()->paginate(15));
    }

    public function show($slug)
    {
        return view('article')->with('article', Article::find($slug));
    }
}
