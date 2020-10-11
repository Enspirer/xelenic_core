<?php

namespace App\ServiceModel\CloudAPIBuilder;

use App\Models\Auth\Traits\Scope\UserScope;
use App\Models\Auth\User;
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

        $CLoudAPIDataTable =  new CloudAPIDataTable;
        $CLoudAPIDataTable->table_name = $table_name;
        $CLoudAPIDataTable->user_id = auth()->user()->id;
        $CLoudAPIDataTable->key = $key;
        $CLoudAPIDataTable->ab_id = $ab_id;
        $CLoudAPIDataTable->status = $status;
        $CLoudAPIDataTable->save();
        $id = $CLoudAPIDataTable->table_id;


//        $id = DB::table('cloud_api_data_table')->insertGetId(
//            [
//                'table_name' => $table_name,
//                'user_id' => auth()->user()->id,
//                'key' => $key,
//                'ab_id' => $ab_id,
//                'status' => $status,
//            ]
//        );

        return $id;
    }



    public static function get_table_by_id ($table_id)
    {
        $get_table = CloudAPIDataTable::where('table_id',$table_id)
            ->first();
        return $get_table;
    }

    public static function delete_table_permenant ($table_id)
    {
        CloudAPIDataTable::where('table_id', $table_id)
            ->delete();

       CloudAPIDataField::where('table_id', $table_id)
            ->delete();

       CloudAPIDataEntry::where('table_id', $table_id)
            ->delete();

    }


    public static function get_tables_by_user ($user_id,$app_id)
    {
        $get_table = CloudAPIDataTable::where('user_id',$user_id)
            ->where('ab_id',$app_id)
            ->get();

        return $get_table;
    }

    public static function ger_table_details_table_key ($auth_key,$app_key,$table_key)
    {
        $get_user_details = User::where('user_key',$auth_key)
            ->first();

        $get_app_details = CloudAPIBuilder::where('key',$app_key)->first();



//
        $get_table_details = CloudAPIDataTable::where('user_id',$get_user_details->id)
            ->where('key',$table_key)
            ->where('ab_id',$get_app_details->ab_id)
            ->first();


        $table_details = [
                            'table_name'=> $get_table_details->table_name,
                            'table_key'=> $get_table_details->key,
                            'created_at'=> $get_table_details->created_at,
                        ];

        return $table_details;
    }

    public static function key_to_id ($table_id)
    {

    }


}
