<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\MyService;
use App\Http\Controllers\Frontend\CloudServices\ServiceManager;


class MyServicesController extends Controller
{
    public function index ()
    {
        $get_service = MyService::get_current_user_services();



        return view('frontend.user.my_services',
            [
                'get_services' => $get_service
            ]);
    }

    public function open_service ($service_id,$service_token)
    {
        $get_service = MyService::get_service_details($service_id);
        $service_manager = ServiceManager::main_function($service_id);

        return view('frontend.user.service_pages.my_service_open',
            [
                'service_manager' => $service_manager,
                'service_details' => $get_service
            ]);
    }


}
