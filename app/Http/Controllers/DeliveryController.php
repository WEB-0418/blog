<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DeliveryController extends Controller
{
    public function show() {

		return view('static_pages.delivery');

    }
}