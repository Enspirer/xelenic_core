<?php

namespace App\Http\Controllers\Frontend\CloudServices;

use Illuminate\Http\Request;
use App\Http\Controllers\Frontend\CloudServices\Services\APIManager;
use App\Http\Controllers\Controller;


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

       }elseif (($service_id == 3))
       {

       }else{
           return 'Service Not Found';
       }
    }
}
