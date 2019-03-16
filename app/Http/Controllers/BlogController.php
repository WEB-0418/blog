<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use Carbon\Carbon;

class BlogController extends Controller
{
	protected $monthNames;

	public function __construct()
	{
		$this->monthNames = [
    		'января','февраля','марта','апреля','мая','июня','июля','августа','сентября','октября','ноября','декабря'

    	];
	}

	/**
	 * Для вывода данных на страницу всех новостей
	 * 
	 * @return mixed
	 */
    public function index()
    {

    	$news = News::paginate(12);
    	return view('blog.blog', [
    		'news' => $news
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
    		'date' => $this->formattedDate($article->updated_at)
    	]);
    }

    /**
     * Для получения даты в требуемом формате
     * 
     * @param $date Carbon
     * @return string
     */
    private function formattedDate(Carbon $date): string
    {
    	return $date->day . ' ' 
    			. $this->monthNames[$date->month - 1] . ' ' 
    			. $date->year;
    }
}
