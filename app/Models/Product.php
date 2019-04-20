<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function comments()  {

    	return $this->hasMany(Comment::class);

    }

 	public function color()  {

    	return $this->belongsTo(Color::class);

    }

 	public function brand()  {

    	return $this->belongsTo(Brand::class);

    }

 	public function season()  {

    	return $this->belongsTo(Season::class);

    }

 	public function material()  {

    	return $this->belongsTo(Material::class);

    }

     	public function producer()  {

    	return $this->belongsTo(Producer::class);

    }

 	public function category()  {

    	return $this->belongsTo(Category::class);

    }
}
