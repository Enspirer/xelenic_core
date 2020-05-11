<?php

namespace App\Http\Controllers\Backend;

use App\Partnership;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public  function index(){

        return view('backend.product');

    }
}
