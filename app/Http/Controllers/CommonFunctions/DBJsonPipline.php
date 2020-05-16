<?php

namespace App\Http\Controllers\CommonFunctions;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class DBJsonPipline extends Controller
{
    public static $root;

    public static function set_root($root)
    {

    }




    public static function decode_data($value) {
       $decode_data = json_decode($value);
       return $decode_data;
    }

    public static function where($json_value,$data_name,$status)
    {
       $decode_data = json_decode($json_value);
       $header = [];
       foreach ($decode_data as $d_data)
       {
          if ( $d_data->$data_name == $status){
              array_push($header,$d_data);
          }
       }
       $encode_data = json_encode($header);
       return $encode_data;
    }


    public static function insert($json_value,$data)
    {
        $decode_data = json_decode($json_value);
        $erome = array_keys($data);
        

        dd($erome);






        $json_data = json_encode($data);
        $decode_json_data = json_decode($json_data);




    }

    public function encoe()
    {

    }
}
