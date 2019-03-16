<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class BlogController extends Controller
{
    public function index()
    {
    	return view('blog.blog', [
    		'news' => News::all()->take(20)
    	]);
    }

    public function show(string $slug)
    {

    	$monthNames = [
    		'января','февраля','марта','апреля','мая','июня','июля','августа','сентября','октября','ноября','декабря'

    	];

    	$article = News::where('slug', $slug)->first();

    	return view('article.index', [
    		'article' => $article,
    		'date' => $article->updated_at->day . ' ' . $monthNames[$article->updated_at->month - 1] . ' ' . $article->updated_at->year
    	]);
    }
}
