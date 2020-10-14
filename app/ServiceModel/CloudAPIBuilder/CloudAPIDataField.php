<?php

namespace App\ServiceModel\CloudAPIBuilder;

use App\Models\Auth\User;
use Illuminate\Database\Eloquent\Model;
use DB;
use PharIo\Manifest\ManifestDocumentMapperTest;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;;

class CloudAPIDataField extends Eloquent
{
    protected $table = 'cloud_api_data_field';
    protected $primaryKey = '_id';
    protected $connection = 'mongodb';

    public static function create_field ($field_name,$type,$key,$ab_id,$table_id,$order_id)
    {
        $CloudDataFiled = new CloudAPIDataField;
        $CloudDataFiled->field_name = $field_name;
        $CloudDataFiled->type = $type;
        $CloudDataFiled->key = $key;
        $CloudDataFiled->ab_id = $ab_id;
        $CloudDataFiled->user_id = auth()->user()->id;
        $CloudDataFiled->table_id =  $table_id;
        $CloudDataFiled->order = $order_id;
        $CloudDataFiled->save();

        $id = $CloudDataFiled->_id;

        return $id;
    }

    public static function get_next_field($table_id)
    {
        $get_data_fields = CloudAPIDataField::where('table_id',$table_id)
            ->get();
        $get_field_count = count($get_data_fields);
        $next_field_number = $get_field_count + 1;
        return $next_field_number;
    }

    public static function get_all_fields($app_id)
    {
        $get_data_fields = CloudAPIDataField::where('ab_id',$app_id)
            ->get();

        return $get_data_fields;
    }

    public static function get_data_fields ($table_id)
    {
        $get_data_fields =CloudAPIDataField::where('table_id',$table_id)
            ->get();

        return $get_data_fields;
    }

    public static function delete_data_field ($table_id,$field_id)
    {
        CloudAPIDataField::where('data_field_id',$field_id)
            ->delete();

        $get_field_order =CloudAPIDataField::where('table_id',$table_id)
            ->orderBy('order','ASC')
            ->get();

        $number_count = 0;

        foreach ($get_field_order as $data_field_id)
        {

            $number_count +=  1;

            $get_order = CloudAPIDataField::where('data_field_id',$data_field_id->data_field_id)
                ->update([
                   'order' => $number_count
                ]);

        }

        return $number_count;
    }


    public static function api_data_table_fields($table_key,$auth_key)
    {
        $get_user_details = User::where('user_key',$auth_key)
            ->first();

        $get_table_details = CloudAPIDataTable::where('key',$table_key)
            ->first();

        $get_fields_data = CloudAPIDataField::where('table_id',$get_table_details->table_id)
            ->where('user_id',$get_user_details->id)
            ->select('field_name','data_field_id','order','type')
            ->get();

        return $get_fields_data;
    }


}
