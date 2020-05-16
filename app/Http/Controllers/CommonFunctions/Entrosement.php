<?php

namespace App\Http\Controllers\CommonFunctions;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
class Entrosement extends Controller
{
    public static function generate_APIKey($length = 10) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    public static function  testing_json_function()
    {
        $test_function = DB::table('settings')
            ->where('settings_id','27')
            ->select('key')
            ->first();
        return $test_function;
    }

}
