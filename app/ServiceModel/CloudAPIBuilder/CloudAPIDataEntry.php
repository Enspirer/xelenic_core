<?php

namespace App\ServiceModel\CloudAPIBuilder;

use Illuminate\Database\Eloquent\Model;
use DB;
class CloudAPIDataEntry extends Model
{
    protected $table = 'cloud_api_data_entry';
    protected $primaryKey = 'entry_id';

    public static function get_data_record( $ab_id, $table_id)
    {
        $thing = DB::table('cloud_api_data_entry')
            ->where('table_id',$table_id)
            ->get();
        $get_data = $thing->groupBy('row_number');
        return $get_data;
    }

    public static function api_get_data_records($table_key,$auth_key)
    {
        $get_user_details = DB::table('users')
            ->where('user_key',$auth_key)
            ->first();

        $get_table_details = DB::table('cloud_api_data_table')
            ->where('key',$table_key)
            ->first();

        $thing = DB::table('cloud_api_data_entry')
            ->where('user_id',$get_user_details->id)
            ->where('table_id',$get_table_details->table_id)
            ->get();

        $get_data = $thing->groupBy('row_number');

        return $get_data;

    }

    public static function get_next_row ($ab_id,$table_id)
    {
        $get_lastest_record = DB::table('cloud_api_data_entry')
            ->where('ab_id',$ab_id)
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
        $get_id = DB::table('cloud_api_data_entry')
            ->insertGetId([
               'data' => $data,
               'type' => $tpe,
               'order' => $order,
               'user_id' => $user_id,
               'table_id' => $table_id,
               'ab_id' => $ab_id,
               'field_id' => $field_id,
               'row_number' => $row_number,
            ]);

        return $get_id;
    }

}
