<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Page;
class PagesController extends Controller
{
    public  function index(){
        $pages = Page::all();
        return view('backend.pages',
            ['pages'=>$pages]);
    }
}
