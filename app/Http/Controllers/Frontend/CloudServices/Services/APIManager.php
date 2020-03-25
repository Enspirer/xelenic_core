<?php

namespace App\Http\Controllers\Frontend\CloudServices\Services;

use App\CloudService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\CommonFunctions\Entrosement;

use App\ServiceModel\CloudAPIBuilder\CloudAPIBuilder;
use App\MyService;
use DB;

class APIManager extends Controller
{
    public static function main_activity($service_id)
    {
        $get_published_app = CloudAPIBuilder::get_apps('published');
        $get_unplushed_app = CloudAPIBuilder::get_apps('unpublished');

        $tanle = [
            'get_published_app' => $get_published_app,
            'get_unpublished_app' => $get_unplushed_app,
            'service_id' => $service_id
        ];



        return $tanle;
    }



    public function create_app (Request $request)
    {
        $app_name = $request->app_name;
        $service_id = $request->service_id;
        $api_key = Entrosement::generate_APIKey(40);
        $user_id = auth()->user()->id;
        $app_id = CloudAPIBuilder::create_app($app_name,0,'unpublished',$api_key);

        return redirect()->route('frontend.user.api_builder.view_app_page',[$app_id,$api_key,$user_id,$service_id]);
    }

    public function view_app_page ($app_id,$api_key,$user_id,$service_id)
    {
        $get_app_details = CloudAPIBuilder::get_app_details_by_id($app_id);

        $service_details =  MyService::get_service_details($service_id);



        return view('frontend.user.service_pages.APIBuilder.pages.select_app_type',
        [
            'get_app_details' => $get_app_details,
            'service_details' => $service_details,
        ]);
    }
}
