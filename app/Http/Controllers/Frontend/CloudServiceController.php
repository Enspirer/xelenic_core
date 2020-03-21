<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\CloudService;
use App\MyService;
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

    public function view_service ($id)
    {
        $get_service = CloudService::where('service_id',$id)->first();

        return view('frontend.user.view_cloud_services',
            [
                'service_details' => $get_service
            ]);
    }

    public function addservices(Request $request) {
        $id = $request->service_id;

        MyService::addto_myservice($id);
        return back();
    }

    public function get_cover_img ($id)
    {

    }
}
