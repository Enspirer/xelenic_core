<?php

namespace App\Http\Controllers\Frontend\CloudServices\Services;

use App\CloudService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\ServiceModel\CloudAPIBuilder\CloudAPIBuilder;


class APIManager extends Controller
{
    public static function main_activity($service_id)
    {
        $get_all_app = CloudAPIBuilder::get_apps('published');



        return $get_all_app;
    }
}
