<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Settings;

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

        foreach ($request->id as $req_number){
            echo "apple";

        }


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
