<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {
        //Stash Comment
        //Route Magerning
        return view('frontend.pages.products');
    }

    public function show_product ($product_slug,$product_id)
    {
        dd($product_slug);
    }
}
