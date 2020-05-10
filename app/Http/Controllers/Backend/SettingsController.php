<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Settings;

use App\Http\Controllers\CommonFunctions\DBJsonPipline;

class SettingsController extends Controller
{
    public function index()
    {
        return view('backend.main_settings');
    }

    public function store(Request $request)
    {

        $banner_section = self::enabled_state($request->banner_section);
        $homepage_partner_logo_section = self::enabled_state($request->homepage_partner_logo_section);
        $homepage_block_1 = self::enabled_state($request->homepage_block_1);
        $homepage_feature_section = self::enabled_state($request->homepage_feature_section);

        //Convert null Data with 1,0 number
        Settings::set_settings('banner_section', $banner_section);
        Settings::set_settings('homepage_block_1', $homepage_block_1);
        Settings::set_settings('homepage_partner_logo_section', $homepage_partner_logo_section);
        Settings::set_settings('homepage_block_1', $homepage_block_1);
        Settings::set_settings('homepage_feature_section', $homepage_feature_section);

        Settings::set_settings('homepage_banner_head',$request->homepage_banner_head);
        Settings::set_settings('homepage_banner_text',$request->homepage_banner_text);

        Settings::set_settings('homepage_desc_block_1_title',$request->homepage_desc_block_1_title);
        Settings::set_settings('homepage_desc_block_1_desc',$request->homepage_desc_block_1_desc);
        Settings::set_settings('homepage_desc_block_link',$request->homepage_desc_block_link);
        Settings::set_settings('homepage_desc_block_button',$request->homepage_desc_block_button);

        Settings::set_settings('homepage_feature_title',$request->homepage_feature_title);
        Settings::set_settings('homepage_feature_subtitle',$request->homepage_feature_subtitle);
        Settings::set_settings('homepage_partner_logo_section_title', $request->homepage_partner_logo_section_title);

      return back();
    }


    public function save_features_data (Request $request)
    {
        $stein = '';

        $array_base = [];


        foreach($request->id as $key => $value){

            $head = $request->head[$key];
            $description = $request->description[$key];
            $link = $request->link[$key];
            $icon = $request->icon[$key];

            $rand_number1 = rand(10,20);
            $rand_number2 = rand(10,20);
            $rand_number3 = rand(10,20);

            $entype = [
              'id' => $rand_number1.$rand_number2.$rand_number3,
              'head' => $head,
              'description' => $description,
              'link' => $link,
              'icon' => $icon,
            ];

            array_push($array_base,$entype);

        }

       $save_data = json_encode($array_base);

//        xelenic_settings('homepage_feature_data',$save_data);

        Settings::set_settings('homepage_feature_data', $save_data);

        return back();


    }


    public static function enabled_state ($string)
    {
        if ($string == null)
        {
            $output = 0;
        }else if ($string == 'on' ){
            $output = 1;
        }else
        {
            $output = 0;
        }

        return $output;
    }
}
