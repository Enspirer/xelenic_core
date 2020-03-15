<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\blog;

class BlogController extends Controller
{
    public function index()
    {
       $blog_details = blog::all();
        return view('frontend.pages.blog',
        ['blog_details' => $blog_details ]);
    }
}
