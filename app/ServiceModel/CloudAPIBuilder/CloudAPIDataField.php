<?php

namespace App\ServiceModel\CloudAPIBuilder;

use Illuminate\Database\Eloquent\Model;
use DB;

class CloudAPIDataField extends Model
{
    protected $table = 'cloud_api_data_table';
    protected $primaryKey = 'table_id';

    public static function create_field ($field_name,$type,$key,$ab_id,$table_id,$order_id)
    {
        $id = DB::table('cloud_api_data_table')
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
    }


}
