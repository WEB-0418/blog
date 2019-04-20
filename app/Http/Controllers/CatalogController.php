<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

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


    	return view('catalog.catalog', [
    		'products' => $products->paginate(config('my-config.productsCount')),
    		
    	]);
    }
}
