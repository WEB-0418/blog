<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NewsCategory extends Model
{
    protected $table = 'news_categories';


    public function news()
    {
    	return $this->belongsToMany(News::class, 'news_news_categories', 'news_category_id');
    }
}
