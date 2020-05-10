<?php

namespace App\Http\Controllers\CommonFunctions;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class DBJsonPipline extends Controller
{
    public static function decode_data($value) {
       $decode_data = json_decode($value);

       return $decode_data;
    }

    public static function where($json_value,$data_name,$status)
    {

        foreach ($json_value as $d_data)
        {
            if ($d_data->$data_name == $status )
            {
                $return_ar = $d_data->$data_name;
            }else{
                $return_ar = $d_data->$data_name;
            }

            dd($return_ar);

        }


    }
}
