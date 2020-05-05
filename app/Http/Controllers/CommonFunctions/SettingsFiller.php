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


        Settings::add_settings('logo','logo.png');
        Settings::add_settings('homepage_feature_section','true');
        Settings::add_settings('footer_color','#222222');


    }
}