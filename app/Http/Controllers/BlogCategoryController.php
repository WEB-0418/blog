<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use App\Models\NewsCategory;

class BlogCategoryController extends Controller
{
	
  	public function index(string $slug) 
  	{
  		$category = NewsCategory::where('slug', $slug)->first();
  		
  		$news = $category->news()->paginate(12);
 
        foreach ($news as $item) {
            $item->date = $this->formattedDate($item->created_at);
        }

    	return view('blog.blog', [
    		'news' => $news, 
        'page_title' =>$category->name
    	]);
    }
    
}

