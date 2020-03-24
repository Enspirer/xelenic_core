<?php

namespace App\ServiceModel\CloudAPIBuilder;

use Illuminate\Database\Eloquent\Model;
use DB;

class CloudAPIBuilder extends Model
{
    protected $table = 'cloud_api_builder';
    protected $primaryKey = 'ab_id';

    public static function create_app($app_name,$app_type,$status,$key)
    {

        $get_app_id = DB::table('cloud_api_builder')
            ->insertGetId(
                [
                    'app_name' => $app_name,
                    'user_id' => auth()->user()->id,
                    'app_type' => $app_type,
                    'status' => $status,
                    'key' => $key,
                ]
            );

        return $get_app_id ;

    }

    public static function update_app ($app_id,$app_name,$app_type,$status,$key)
    {
        DB::table('cloud_api_builder')
            ->where('ab_id', $app_id)
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
        $get_apps =DB::table('cloud_api_builder')
                    ->where('status',$status)
                    ->where('user_id',auth()->user()->id)
                    ->get();

        return $get_apps;
    }

    public static function get_next_app_order_id()
    {
        $get_apps =DB::table('cloud_api_builder')
            ->where('user_id',auth()->user()->id)
            ->get();
    }
}
