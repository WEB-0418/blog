<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Color;

class ProductController extends Controller
{
    public function index(Request $request, int $id)
    {
    	$product = Product::findOrFail($id);
    	// dd($product->toArray());

    	$sameProducts = Product::where('name', $product->name)->get();
    	
    	$colorsIds = $sameProducts->map(function($product) {
    		return $product->color;
    	})
    	->unique()->pluck('id')->all();

    	$colors = Color::whereIn('id', $colorsIds)->get();
    	$sizes = $sameProducts->pluck('size')->unique()->all();
    	// dd($colors);

    	return view('product.index', [
    		'product' => $product,
    		'colors' => $colors,
    		'sizes' => $sizes,
    	]);
    }
}
