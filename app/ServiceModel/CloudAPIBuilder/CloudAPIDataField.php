<?php

namespace App\ServiceModel\CloudAPIBuilder;

use Illuminate\Database\Eloquent\Model;
use DB;
use PharIo\Manifest\ManifestDocumentMapperTest;

class CloudAPIDataField extends Model
{
    protected $table = 'cloud_api_data_table';
    protected $primaryKey = 'table_id';

    public static function create_field ($field_name,$type,$key,$ab_id,$table_id,$order_id)
    {
        $id = DB::table('cloud_api_data_field')
            ->insertGetId ([
               'field_name' =>  $field_name,
               'type' =>  $type,
               'key' =>  $key,
               'ab_id' =>  $ab_id,
               'user_id' =>  auth()->user()->id,
               'table_id' =>  $table_id,
               'order' =>  $order_id,
            ]);

        return $id;
    }

    public static function get_next_field($table_id)
    {
        $get_data_fields = DB::Table('cloud_api_data_field')
            ->where('table_id',$table_id)
            ->get();
        $get_field_count = count($get_data_fields);
        $next_field_number = $get_field_count + 1;
        return $next_field_number;
    }

    public static function get_data_fields ($table_id)
    {
        $get_data_fields = DB::Table('cloud_api_data_field')
            ->where('table_id',$table_id)
            ->get();

        return $get_data_fields;
    }

    public static function delete_data_field ($table_id,$field_id)
    {
        DB::table('cloud_api_data_field')
            ->where('data_field_id',$field_id)
            ->delete();

        $get_field_order = DB::table('cloud_api_data_field')
            ->where('table_id',$table_id)
            ->orderBy('order','ASC')
            ->get();

        $number_count = 0;

        foreach ($get_field_order as $data_field_id)
        {

            $number_count +=  1;

            $get_order = DB::table('cloud_api_data_field')
                ->where('data_field_id',$data_field_id->data_field_id)
                ->update([
                   'order' => $number_count
                ]);

        }

        return $number_count;
    }


    public static function api_data_table_fields($table_key,$auth_key)
    {
        $get_user_details = DB::table('users')
            ->where('user_key',$auth_key)
            ->first();

        $get_table_details = DB::table('cloud_api_data_table')
            ->where('key',$table_key)
            ->first();

        $get_fields_data = DB::table('cloud_api_data_field')
            ->where('table_id',$get_table_details->table_id)
            ->where('user_id',$get_user_details->id)
            ->select('field_name','data_field_id','order','type')
            ->get();

        return $get_fields_data;
    }


}
