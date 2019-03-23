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
        $article->increment('views');

        $latestNews = News::orderBy('updated_at', 'desc')->take(config('my-config.tabsCount'))->get();
        $popularNews = News::orderBy('views')->take(config('my-config.tabsCount'))->get();

        foreach ($latestNews as $item) {
            $item->date = $this->formattedDate($item->created_at);
        }

        foreach ($popularNews as $item) {
            $item->date = $this->formattedDate($item->created_at);
        }

    	return view('article.index', [
    		'article' => $article,
    		'date' => $this->formattedDate($article->updated_at),
            'latestNews' => $latestNews,
            'popularNews' => $popularNews
    	]);
    }

    
}
