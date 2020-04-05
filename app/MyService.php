<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class MyService extends Model
{
    protected $table = 'my_service';
    protected $primaryKey = 'my_service_id';

    public static function get_current_user_services()
    {
        $get_users = DB::table('my_service')
            ->where('user_id', auth()->user()->id)
            ->join('cloud_service','my_service.service_id', '=' , 'cloud_service.service_id')
            ->get();

        return $get_users;
    }

    public static function addto_myservice($service_id) {
        $service_datails = DB::table('cloud_service')
            ->where('service_id', $service_id)
            ->first();

        $my_service_details = DB::table('my_service')
            ->where('service_id', $service_id)
            ->where('user_id', auth()->user()->id)
            ->first();



        if ($my_service_details == null)
        {
            $myservices = new MyService();
            $myservices->service_name = $service_datails->service_name;
            $myservices->service_id = $service_id;
            $myservices->user_id = auth()->user()->id;
            $myservices->status = 1;
            $myservices->intence_count = 0;
            $myservices->save();
            return 'This Service added successfully ';
        }else{
            return 'This service already added your service list, Check your MyService';
        }
    }

    public static function get_service_details ($service_id)
    {
        $service_datails = DB::table('cloud_service')
            ->where('service_id', $service_id)
            ->first();

        return $service_datails;
    }

    public static function return_open_service($service_id)
    {
        $get_service = MyService::get_service_details($service_id);
        return view('frontend.user.service_pages.my_service_open',
            [
                'service_details' => $get_service
            ]);
    }


}
