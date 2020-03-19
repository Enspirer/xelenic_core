<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\CloudService;
class CloudServiceController extends Controller
{
    public function index ()
    {
       $get_services = CloudService::get_all_active_service();
        return view('frontend.user.cloud_services',
            [
                'get_services' => $get_services
            ]);
    }

    public function get_cover_img ($id)
    {

    }
}
