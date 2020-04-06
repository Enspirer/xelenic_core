<?php

namespace App\Http\Controllers\Frontend\CloudServices\Services;

use App\CloudService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\CommonFunctions\Entrosement;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\URL;

use App\ServiceModel\CloudAPIBuilder\CloudAPIBuilder;
use App\MyService;
use DB;
use App\ServiceModel\CloudAPIBuilder\CloudAPIDataTable;
use App\ServiceModel\CloudAPIBuilder\CloudAPIDataField;
use App\ServiceModel\CloudAPIBuilder\CloudAPIDataEntry;

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

    public function change_app_type (Request $request)
    {
        $app_type = $request->api_type;
        $api_key = $request->api_key;
        $ab_id = $request->ab_id;
        $service_id = $request->service_id;
        $user_id = auth()->user()->id;
        $get_details = CloudAPIBuilder::get_app_details_by_id($ab_id);
        CloudAPIBuilder::change_app_type($ab_id,$app_type);
        return redirect()->route('frontend.user.api_builder.dashboard',[$ab_id,$api_key,$user_id,$service_id]);
    }

    public function api_dashboard($app_id,$api_key,$user_id,$service_id)
    {
        $service_details =  MyService::get_service_details($service_id);
        $get_app_details = CloudAPIBuilder::get_app_details_by_id($app_id);
        $get_cloud_table = CloudAPIDataTable::get_tables_by_user(auth()->user()->id,$app_id);
        $authfaction = MyService::get_service_details_by_user(2);
        $getdata_field_app = CloudAPIDataField::get_all_fields($app_id);


        if ($get_app_details->app_type == 0)
        {
            return redirect()->route('frontend.user.api_builder.view_app_page',[$app_id,$api_key,$user_id,$service_id]);
        }else{
            return view('frontend.user.service_pages.APIBuilder.pages.builder',
                [
                    'service_details' => $service_details,
                    'get_app_details' => $get_app_details,
                    'getdata_field_app' => $getdata_field_app,
                    'get_cloud_table' => $get_cloud_table,
                    'authfaction' => $authfaction
                ]);
        }
    }

    public function create_table(Request $request)
    {
        $ab_id = $request->ab_id;
        $table_name = $request->table_name;
        $service_id = $request->service_id;
        $api_key = $request->api_key;
        $user_id = auth()->user()->id;
        CloudAPIDataTable::create_table($table_name,$ab_id,'1');
        return redirect()->route('frontend.user.api_builder.dashboard',[$ab_id,$api_key,$user_id,$service_id,'#builder_table']);
    }

    public function delete_table ($table_id)
    {
        CloudAPIDataTable::delete_table_permenant($table_id);
        return Redirect::to(URL::previous() . "#builder_table");
    }


    public function view_app_page ($app_id,$api_key,$user_id,$service_id)
    {
        $get_app_details = CloudAPIBuilder::get_app_details_by_id($app_id);
        $service_details =  MyService::get_service_details($service_id);
        return view('frontend.user.service_pages.APIBuilder.pages.select_app_type',
        [
            'get_app_details' => $get_app_details,
            'service_details' => $service_details,
            'service_id' => $service_id,
        ]);
    }

    public function table_edit_page ($table_id,$table_key,$service_id,$app_id)
    {
        $service_details =  MyService::get_service_details($service_id);
        $get_app_details = CloudAPIBuilder::get_app_details_by_id($app_id);
        $get_cloud_table = CloudAPIDataTable::get_tables_by_user(auth()->user()->id,$app_id);
        $get_table_details = CloudAPIDataTable::get_table_by_id($table_id);
        $get_table_field = CloudAPIDataField::get_data_fields($table_id);

        return view('frontend.user.service_pages.APIBuilder.pages.phaster_views.data_fied_creator',
            [
                'service_details' => $service_details,
                'get_app_details' => $get_app_details,
                'get_cloud_table' => $get_cloud_table,
                'table_details' =>$get_table_details,
                'get_table_field' =>$get_table_field
            ]);
    }

    public function insert_data_field (Request $request)
    {
        $field_name =  $request->field_name;
        $service_id =  $request->service_id;
        $ab_id =  $request->ab_id;
        $table_id =  $request->table_id;
        $data_type =  $request->data_type;
        $order = CloudAPIDataField::get_next_field($table_id);
        $key = Entrosement::generate_APIKey(40);


        CloudAPIDataField::create_field($field_name,$data_type,$key,$ab_id,$table_id,$order);

        return back();
    }

    public function delete_data_field ($field_id,$table_id)
    {
       $response = CloudAPIDataField::delete_data_field($table_id,$field_id);

       return back();
    }

    public function view_data_entry ($table_id,$table_key,$service_id,$app_id)
    {
        $service_details =  MyService::get_service_details($service_id);
        $get_app_details = CloudAPIBuilder::get_app_details_by_id($app_id);
        $get_cloud_table = CloudAPIDataTable::get_tables_by_user(auth()->user()->id,$app_id);
        $get_table_details = CloudAPIDataTable::get_table_by_id($table_id);
        $get_table_field = CloudAPIDataField::get_data_fields($table_id);

        $get_entry_data = CloudAPIDataEntry::get_data_record($app_id,$table_id);




        return view('frontend.user.service_pages.APIBuilder.pages.phaster_views.view_data_entry',
            [
                'service_details' => $service_details,
                'get_app_details' => $get_app_details,
                'get_cloud_table' => $get_cloud_table,
                'table_details' =>$get_table_details,
                'get_table_field' =>$get_table_field,
                'data_entry' => $get_entry_data
            ]);
    }

    public function insert_record ( Request $request)
    {
        $app_id = $request->app_id;
        $table_id = $request->table_id;
        $data = $request->data;
        $get_row_number = CloudAPIDataEntry::get_next_row($app_id,$table_id);
        $get_feid_number = 0;
        foreach ($data as $dat)
        {
             $get_feid_number += 1;
           CloudAPIDataEntry::insert_data_static($dat,'text',$get_feid_number,auth()->user()->id,$table_id,$app_id,$get_feid_number,$get_row_number);

        }

        return back();
    }

    public function api_get_table_details (Request $request,$app_key,$table_key)
    {
        $auth_key = $request->header('AUTH_KEY');
        //This is Table Details_Only
        $get_table_details = CloudAPIDataTable::ger_table_details_table_key($auth_key,$app_key,$table_key);
       return $get_table_details;
    }

    public function api_get_table_fields (Request $request,$app_key,$table_key)
    {
        $auth_key = $request->header('AUTH_KEY');
        $get_table_details = CloudAPIDataField::api_data_table_fields($table_key,$auth_key);
        return $get_table_details;

    }

    public function api_get_table_records (Request $request,$app_key,$table_key)
    {
        $auth_key = $request->header('AUTH_KEY');
        $get_table_records = CloudAPIDataEntry::api_get_data_records($table_key,$auth_key);
        return $get_table_records;

    }
}
