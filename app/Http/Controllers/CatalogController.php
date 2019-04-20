<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Color;
use App\Models\Brand;

class CatalogController extends Controller
{
    public function index(Request $request)
    {

    	$products = Product::query();

    	if ($request->has('seasons')) {
    		// dd($request->get('seasons'));
    		$products = $products->whereIn('season_id', $request->get('seasons'));
    	}

    	if ($request->has('materials')) {
    		$products = $products->whereIn('material_id', $request->get('materials'));
    	}

    	if ($request->has('producers')) {
    		$products = $products->whereIn('producer_id', $request->get('producers'));
    	}


    // 	$brands = $products->get()->map(function($product){
    // 		return $product->brand;
    // 	});

    $brand_ids = array_values($products->pluck('brand_id')->unique()->toArray());

	$color_ids = array_values($products->pluck('color_id')->unique()->toArray());

    	return view('catalog.catalog', [
    		'products' => $products->paginate(config('my-config.productsCount')),
            'brands' => Brand::whereIn('id', $brand_ids)->get(),
            'colors' => Color::whereIn('id', $color_ids)->get(),
            'sizes' => $products->pluck('size')->unique(),
    	]);
    }
}
