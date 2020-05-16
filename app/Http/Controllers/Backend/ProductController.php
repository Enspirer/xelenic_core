<?php

namespace App\Http\Controllers\Backend;

use App\Partnership;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Controllers\CommonFunctions\Entrosement;
use App\Http\Controllers\CommonFunctions\DBJsonPipline;
use DB;

class ProductController extends Controller
{


    public  function index(){



    }
    public  function show(){

        $test_json_value = Entrosement::testing_json_function();
//        $tester = DBJsonPipline::where($test_json_value->key,'head','Expert');
//        $filter_master = DBJsonPipline::where($tester,'description','master');
//        $exported_data = DBJsonPipline::decode_data($filter_master);
//        dd($exported_data);

        $id =  DBJsonPipline::insert($test_json_value->key,
            [
                'head' => 'Apple',
                'description' => 'Tarcobell',
                'link' => 'LIn',
                'icon' => 'fa fa-icon"',
            ]);


//        DB::table('sss')->get();

//        return view('backend.product');

    }
}
