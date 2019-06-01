<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\OrderEmail;
use Illuminate\Support\Facades\Mail;
use App\Models\Product;

class OrderController extends Controller
{
    public function create(Request $request)
    {
    	$rawProducts = collect($request->get('products'));
        $products = $rawProducts->map(function($rp) use ($request) {
            $name = Product::find($rp['id'])->name;
            $product = Product::where('name', $name)
                        ->where('color_id', $rp['color'])
                        ->where('size', $rp['size'])
                        ->first();

            $product->count = $rp['count'] ?? 1;

            return $product;
        });

        Mail::to('admin@e.mail')->send(new OrderEmail($products));
    }
}
