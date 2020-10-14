<?php

namespace App\ServiceModel\CloudAPIBuilder;

use App\MyService;
use Illuminate\Database\Eloquent\Model;
use DB;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;


class CloudAPIBuilder extends Eloquent
{
    protected $table = 'cloud_api_builder';
    protected $primaryKey = '_id';
    protected $connection = 'mongodb';

    public static function create_app($app_name,$app_type,$status,$key)
    {

        $cloudAPIBuilder = new CloudAPIBuilder;
        $cloudAPIBuilder->app_name = $app_name;
        $cloudAPIBuilder->user_id = auth()->user()->id;
        $cloudAPIBuilder->app_type = $app_type;
        $cloudAPIBuilder->status = $status;
        $cloudAPIBuilder->key = $key;
        $cloudAPIBuilder->save();
        $get_app_id = $cloudAPIBuilder->_id;


        $get_all_services = CloudAPIBuilder::where('user_id', auth()->user()->id)
            ->get();

        $get_service_count = count($get_all_services);

         MyService::where('service_id',1)
            ->where('user_id',auth()->user()->id)
            ->update(
                ['intence_count' => $get_service_count]
            );
        return $get_app_id ;

    }

    public static function change_app_type ($ab_id,$app_type)
    {

        CloudAPIBuilder::where('_id',$ab_id)
            ->update(
                ['app_type' => $app_type]
            );
        return 'Change app type success';
    }

    public static function update_app ($app_id,$app_name,$app_type,$status,$key)
    {
        CloudAPIBuilder::where('_id', $app_id)
            ->update(
                [
                    'app_name' => $app_name,
                    'user_id' => auth()->user()->id,
                    'app_type' => $app_type,
                    'key' => $key,
                ]
            );

        return 'App updated successful.' ;
    }

    public static function get_apps ($status)
    {
        $get_apps =CloudAPIBuilder::where('status',$status)
                    ->where('user_id',auth()->user()->id)
                    ->get();

        return $get_apps;
    }

    public static function get_next_app_order_id()
    {
        CloudAPIBuilder::where('user_id',auth()->user()->id)
            ->get();
    }

    public static function get_app_details_by_id ($id)
    {
        $get_app_details = CloudAPIBuilder::where('_id',$id)
            ->where('user_id',auth()->user()->id)
            ->first();
        return $get_app_details;
    }
}
