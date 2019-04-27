<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class APICatalogController extends Controller
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

    	if ($request->has('color')) {
    		$products = $products->where('color_id', $request->get('color'));
    	}

        $brand_ids = array_values($products->pluck('brand_id')->unique()->toArray());
    	$color_ids = array_values($products->pluck('color_id')->unique()->toArray());

    	return response()->json([
    		'products' => $products->paginate(config('my-config.productsCount')),
    	]);
    }
}
