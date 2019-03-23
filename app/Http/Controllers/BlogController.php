<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;


class BlogController extends Controller
{
	

	/**
	 * Для вывода данных на страницу всех новостей
	 * 
	 * @return mixed
	 */
    public function index()
    {

    	$news = News::paginate(12);
        foreach ($news as $item) {
            $item->date = $this->formattedDate($item->created_at);
        }

        return view('blog.blog', [
    		'news' => $news, 
            'page_title' =>'НОВОСТИ'
    	]);
    }

    /**
     * Для вывода внутренней страницы конкретной новости
     * 
     * @param $slug string
     * @return mixed
     */
    public function show(string $slug)
    {

    	$article = News::where('slug', $slug)->first();

    	return view('article.index', [
    		'article' => $article,
            'categories' => $this->categories,
    		'date' => $this->formattedDate($article->updated_at)
    	]);
    }

    
}
