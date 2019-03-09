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
}
