<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PartnershipsController extends Controller
{
    public function index()
    {
        return view('frontend.pages.partnerships');
    }
}
