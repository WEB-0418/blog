<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\OrderEmail;
use Illuminate\Support\Facades\Mail;

class OrderController extends Controller
{
    public function create(Request $request)
    {
    	$rawProducts = collect($request->get('products'));
        $products = $rawProducts->map(function($rp){
            $name = Product::find($rp['id'])->name;
            return Product::where('name', $name)
                        ->where('color_id', $rp['color'])
                        ->where('size', $rp['size'])
                        ->first();
        });

        Mail::to('admin@e.mail')->send(new OrderEmail());

    }
}
