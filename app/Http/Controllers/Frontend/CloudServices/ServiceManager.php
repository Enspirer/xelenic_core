<?php

namespace App\Http\Controllers\Frontend\CloudServices;

use Illuminate\Http\Request;
use App\Http\Controllers\Frontend\CloudServices\Services\APIManager;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Frontend\CloudServices\Services\AutFactor;
use App\Http\Controllers\Frontend\CloudServices\Services\WebsiteBuilder;

class ServiceManager extends Controller
{
    public static function main_function($service_id)
    {
       if ($service_id == 1)
       {
           $api_details =  APIManager::main_activity($service_id);
            return $api_details;

       }elseif ($service_id ==2)
       {

           $authFactor_details = AutFactor::main_activity($service_id);
           return $authFactor_details;

       }elseif (($service_id == 3))
       {

           $webbuilder_details = WebsiteBuilder::main_activity($service_id);
           return $webbuilder_details;

       }else{
           return 'Service Not Found';
       }
    }
}
