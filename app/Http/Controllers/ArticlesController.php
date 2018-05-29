<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Articles;

class ArticlesController extends Controller
{
    public function showAll()
	{
       $articles = Articles::all();
       return view('articles', ['articles' => $articles]);
	}
}
