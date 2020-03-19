<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CloudServiceController extends Controller
{
    public function index ()
    {
       return view('frontend.user.cloud_services');
    }
}
