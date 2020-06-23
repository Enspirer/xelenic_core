<?php

namespace App\Http\Controllers\Backend;

use App\Partnership;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Controllers\CommonFunctions\Entrosement;
use App\Http\Controllers\CommonFunctions\DBJsonPipline;
use DB;

class ProductController extends Controller
{


    public  function index(){
        return view('backend.product');
    }
    public  function show(){



    }
}
