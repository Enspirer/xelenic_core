<?php

namespace App\ServiceModel\CloudAPIBuilder;

use Illuminate\Database\Eloquent\Model;
use DB;
use App\Http\Controllers\CommonFunctions\Entrosement;

class CloudAPIDataTable extends Model
{
    protected $table = 'cloud_api_data_table';
    protected $primaryKey = 'table_id';

    public static function create_table($table_name,$ab_id,$status)
    {
        $key = Entrosement::generate_APIKey(30);

        $id = DB::table('cloud_api_data_table')->insertGetId(
            [
                'table_name' => $table_name,
                'user_id' => auth()->user()->id,
                'key' => $key,
                'ab_id' => $ab_id,
                'status' => $status,
            ]
        );

        return $id;
    }



    public static function get_table_by_id ($table_id)
    {
        $get_table = DB::table('cloud_api_data_table')
            ->where('table_id',$table_id)
            ->first();
        return $get_table;
    }

    public static function delete_table_permenant ($table_id)
    {
        DB::table('cloud_api_data_table')
            ->where('table_id', $table_id)
            ->delete();

        DB::table('cloud_api_data_field')
            ->where('table_id', $table_id)
            ->delete();

        DB::table('cloud_api_data_entry')
            ->where('table_id', $table_id)
            ->delete();

    }


    public static function get_tables_by_user ($user_id,$app_id)
    {
        $get_table = DB::table('cloud_api_data_table')
            ->where('user_id',$user_id)
            ->where('ab_id',$app_id)
            ->get();

        return $get_table;
    }


}
