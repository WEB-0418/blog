<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class BusketController extends Controller
{
    public function index(Request $request, int $productId)
    {
    	

    	return view('busket.index', [
    		'product' => Product::find($productId)
    	]);
    }
}
