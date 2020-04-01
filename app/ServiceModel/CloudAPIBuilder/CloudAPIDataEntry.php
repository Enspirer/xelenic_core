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
//        $thing = CloudAPIDataEntry::all();
        $thing = DB::table('cloud_api_data_entry')
            ->where('table_id',$table_id)
            ->get();





        $get_data = $thing->groupBy('row_number');




        return $get_data;
    }
}
