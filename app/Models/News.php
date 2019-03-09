<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
     // protected $table = 'news';

	// protected $hidden = [
	// 	'id'
	// ];

	public function author()
	{
		return $this->belongsTo(Author::class);
	}

	public function categories()
	{
		return $this->belongsToMany(NewsCategory::class, 'news_news_categories', 'news_id', 'category_id');
	}

}
