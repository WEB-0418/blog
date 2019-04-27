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

        $brand_ids = array_values($products->pluck('brand_id')->unique()->toArray());
    	$color_ids = array_values($products->pluck('color_id')->unique()->toArray());
        $sizes = $products->pluck('size')->unique();
        $minPrice = $products->pluck('price')->min();
        $maxPrice = $products->pluck('price')->max();
        $start = $minPrice;
        $finish = $maxPrice;

        if ($request->has('color')) {
            $products = $products->where('color_id', $request->get('color'));
        }

        if ($request->has('brand')) {
            $products = $products->where('brand_id', $request->get('brand'));
        }

        if ($request->has('size')) {
            $products = $products->where('size', $request->get('size'));
        }

        if ($request->has('sorting')) {
            switch($request->get('sorting')) {
                case 'price_asc': 
                    $products = $products->orderBy('price', 'ASC');
                    break;
                case 'price_desc':
                    $products = $products->orderBy('price', 'desc');
                    break;
                case 'popularity':
                    //todo: todo!
                    break;
            }
        }

        if ($request->has('min_price') && $request->has('max_price')) {
            $products = $products->whereBetween(
                'price', 
                [$request->get('min_price'), $request->get('max_price')]
            );
            $start = $request->get('min_price');
            $finish = $request->get('max_price');
        }

    	return view('catalog.catalog', [
    		'products' => $products->paginate(config('my-config.productsCount')),
            'brands' => Brand::whereIn('id', $brand_ids)->get(),
            'colors' => Color::whereIn('id', $color_ids)->get(),
            'sizes' => $sizes,
            'minPrice' => $minPrice,
            'maxPrice' => $maxPrice,
            'start' => $start,
            'finish' => $finish
    	]);
    }
}
