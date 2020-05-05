<?php

namespace App\Http\Controllers\CommonFunctions;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Settings;

class SettingsFiller extends Controller
{
    public static function seed_settings()
    {
        //Common Section
        Settings::add_settings('homepage_title',env('APP_NAME'));
        Settings::add_settings('copyright_text','Xelenic PVT Ltd');
        Settings::add_settings('logo','logo.png');
        Settings::add_settings('calibrate_mode','true');

        //Banner Section
        Settings::add_settings('homepage_banner_head','Welcome to Xelenic');
        Settings::add_settings('homepage_banner_text','Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting,');
        Settings::add_settings('banner_image','logo.png');
        Settings::add_settings('banner_section','true');

        //Partner Logo Section
        Settings::add_settings('homepage_partner_logo_section','true');
        Settings::add_settings('homepage_partner_logo_section_title','Our Partners');

        //Service Plans
        Settings::add_settings('homepage_plans','true');


        //Custom Solution
        Settings::add_settings('homepage_custom_solution_section','true');
        Settings::add_settings('homepage_custom_solution_title','Looking for custom solutions');
        Settings::add_settings('homepage_custom_solution_description','Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.');
        Settings::add_settings('homepage_custom_solution_button','Request free solution');
        Settings::add_settings('homepage_custom_solution_link','url');


        //Belive Block
        Settings::add_settings('homepage_block_1','true');
        Settings::add_settings('homepage_desc_block_1','We Believe that Interior beautifies the');
        Settings::add_settings('homepage_desc_block_1_title','We Believe that Interior beautifies the');
        Settings::add_settings('homepage_desc_block_1_desc','Inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards especially in the workplace. That’s why it’s crucial that, as women, our behavior on the job is beyond reproach. inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards especially in the workplace. That’s why it’s crucial that.');
        Settings::add_settings('homepage_desc_block_button','See Details');
        Settings::add_settings('homepage_desc_block_link','#link');
        Settings::add_settings('homepage_desc_block_image','c1.jpg');

        //Feature Description
        Settings::add_settings('homepage_feature','true');
        Settings::add_settings('homepage_feature_title','Some Features that Made us Unique');
        Settings::add_settings('homepage_feature_subtitle','Who are in extremely love with eco friendly system.');


        $data_features1  =  [
            'head' => 'Expert Technugal',
            'description' => 'Usage of the Internet is becoming more common due to rapid advancement of technology and power.',
            'icon' => 'lnr lnr-user',
        ];

        $data_features2  =  [
            'head' => 'Expert Technugal',
            'description' => 'Usage of the Internet is becoming more common due to rapid advancement of technology and power.',
            'icon' => 'lnr lnr-license',
        ];

        $data_features3  =  [
            'head' => 'Expert Technugal',
            'description' => 'Usage of the Internet is becoming more common due to rapid advancement of technology and power.',
            'icon' => 'lnr lnr-phone',
        ];

        $esmash = [$data_features1,$data_features2,$data_features3];
        $calime = json_encode($esmash);
        Settings::add_settings('homepage_feature_data',$calime);
        Settings::add_settings('homepage_feature_section','true');




        Settings::add_settings('footer_color','#222222');

    }
}