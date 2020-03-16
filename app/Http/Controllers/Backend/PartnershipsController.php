<?php

namespace App\Http\Controllers\Backend;

use App\Partnership;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PartnershipsController extends Controller
{
    public  function index(){
        $partnerships = Partnership::all();
        return view('backend.partnerships',
            ['partnerships'=>$partnerships]);
    }
}
