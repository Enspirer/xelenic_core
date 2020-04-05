<?php

namespace App\Http\Controllers\Frontend\CloudServices\Services;

use App\CloudService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\CommonFunctions\Entrosement;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\URL;

use App\ServiceModel\CloudAPIBuilder\CloudAPIBuilder;
use App\MyService;
use DB;
use App\ServiceModel\CloudAPIBuilder\CloudAPIDataTable;
use App\ServiceModel\CloudAPIBuilder\CloudAPIDataField;
use App\ServiceModel\CloudAPIBuilder\CloudAPIDataEntry;

class AutFactor extends Controller
{
    public static function main_activity($service_id)
    {



    }

    public function activate_auth_factor(Request $request)
    {
        $auth_key = Entrosement::generate_APIKey(30);
        DB::table('users')
            ->where('id',auth()->user()->id)
            ->update(
                ['user_key' => $auth_key ]
            );
        return back();
    }

    public function deactivate_auth_factor (Request $request)
    {
        DB::table('users')
            ->where('id',auth()->user()->id)
            ->update(
                ['user_key' => null ]
            );

        return back();
    }
}