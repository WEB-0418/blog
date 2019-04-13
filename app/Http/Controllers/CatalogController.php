<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class CatalogController extends Controller
{
    public function index(Request $request)
    {

    	// $products = Product::all;

    	return view('catalog.catalog', [
    		'products' => Product::paginate(config('my-config.productsCount'))
    	]);
    }
}
