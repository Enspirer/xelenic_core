<?php

namespace App\ServiceModel\CloudAPIBuilder;

use App\Models\Auth\User;
use Illuminate\Database\Eloquent\Model;
use DB;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class CloudAPIDataEntry extends Eloquent
{
    protected $table = 'cloud_api_data_entry';
    protected $primaryKey = '_id';
    protected $connection = 'mongodb';

    public static function get_data_record( $ab_id, $table_id)
    {
        $thing = CloudAPIDataEntry::where('table_id',$table_id)
            ->get();
        $get_data = $thing->groupBy('row_number');
        return $get_data;
    }

    public static function api_get_data_records($table_key,$auth_key)
    {
        $get_user_details = User::where('user_key',$auth_key)
            ->first();

        $get_table_details = CloudAPIDataTable::where('key',$table_key)
            ->first();

        $thing = CloudAPIDataEntry::where('user_id',$get_user_details->id)
            ->where('table_id',$get_table_details->table_id)
            ->get();

        $get_data = $thing->groupBy('row_number');

        return $get_data;

    }

    public static function get_next_row ($ab_id,$table_id)
    {
        $get_lastest_record =CloudAPIDataEntry::where('ab_id',$ab_id)
            ->where('table_id',$table_id)
            ->orderBy('row_number','desc')
            ->first();

        if ($get_lastest_record == null)
        {
            return 1;
        }else {
            $get_last_row_number = $get_lastest_record->row_number;
            $next_row_number = $get_last_row_number + 1;
            return $next_row_number;
        }




    }

    public static function insert_data_static ($data,$tpe,$order,$user_id,$table_id,$ab_id,$field_id,$row_number)
    {
        $CloudAPIDataEntry = new CloudAPIDataEntry;
        $CloudAPIDataEntry->data = $data;
        $CloudAPIDataEntry->type = $tpe;
        $CloudAPIDataEntry->order = $order;
        $CloudAPIDataEntry->user_id = $user_id;
        $CloudAPIDataEntry->table_id =$table_id;
        $CloudAPIDataEntry->ab_id = $ab_id;
        $CloudAPIDataEntry->field_id = $field_id;
        $CloudAPIDataEntry->row_number = $row_number;
        $CloudAPIDataEntry->save();
        $get_id = $CloudAPIDataEntry->_id;

        return $get_id;
    }

}
