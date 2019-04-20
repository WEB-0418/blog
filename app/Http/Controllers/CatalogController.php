<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Season;

class CatalogController extends Controller
{
    public function index(Request $request)
    {

    	$products = Product::query();

    	if ($request->has('seasons')) {
    		// dd($request->get('seasons'));
    		$products = $products->whereIn('season_id', $request->get('seasons'));
    	}


    	return view('catalog.catalog', [
    		'products' => $products->paginate(config('my-config.productsCount')),
    		'seasons' => Season::all()
    	]);
    }
}
