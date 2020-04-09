<?php

namespace App\ServiceModel\QulintBuilder;

use Illuminate\Database\Eloquent\Model;
use DB;
use App\Http\Controllers\CommonFunctions\Entrosement;

class Website extends Model
{
    protected $table = 'websites';
    protected $primaryKey = 'website_id';


    public static function create_website($website_name,$service_id,$type,$app_id,$description,$custom_url)
    {
     $get_website_id = DB::table('websites')
         ->insertGetId(
             [
                 'website_name' => $website_name,
                 'user_id' => auth()->user()->id,
                 'service_id' => $service_id,
                 'type' => $type,
                 'status' => 0,
                 'app_id' => $app_id,
                 'key' => Entrosement::generate_APIKey('30'),
                 'description' => $description,
                 'custom_url' => $custom_url,
             ]
         );

     return $get_website_id;
    }

    public static function set_homepage($website_id,$q_id)
    {
        DB::table('websites')
            ->where('website_id',$website_id)
            ->where('user_id',auth()->user()->id)
            ->update([
                'home_page' => $q_id
            ]);

        return 'Settings Saved';
    }

    public static function set_custom_url ($website_id,$custom_url)
    {
        DB::table('websites')
            ->where('website_id',$website_id)
            ->where('user_id',auth()->user()->id)
            ->update([
                'custome_url' => $custom_url
            ]);
        return 'Custom URL';
    }

    public static function get_websites($status){
        $get_websites =DB::table('websites')
            ->where('user_id',auth()->user()->id)
            ->where('status',$status)
            ->get();
        return $get_websites;
    }




}
