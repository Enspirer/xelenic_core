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
            ->get();

        return $get_users;
    }

    public static function addto_myservice($service_id) {
        $service_datails = DB::table('cloud_service')
            ->where('service_id', $service_id)
            ->first();
        $myservices = new MyService();
        $myservices->service_name = $service_datails->service_name;
        $myservices->service_id = $service_id;
        $myservices->user_id = auth()->user()->id;
        $myservices->status = 1;
        $myservices->intence_count = 0;
        $myservices->save();
    }
}
