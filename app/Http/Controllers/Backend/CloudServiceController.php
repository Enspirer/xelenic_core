<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\CloudService;

class CloudServiceController extends Controller
{
    public function index()
    {
        $cloud_service = CloudService::all();

        return view('backend.cloud_service_page',
            ['cloud_services'=>$cloud_service]);
    }
}
