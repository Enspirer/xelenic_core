<?php

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;
use App\Http\Controllers\CommonFunctions\ServiceContents;
use App\Settings;

class DatabaseSeeder extends Seeder
{
    use TruncateTable;

    /**
     * Seed the application's database.
     */
    public function run()
    {

        $api_builder_content =  ServiceContents::api_builder_content();
        $auth_service_content =  ServiceContents::auth_service_content();
        $qulint_service_content =  ServiceContents::qulint_service_content();


        DB::table('cloud_service')->insert(
            [
                'service_name' => 'API Builder',
                'payment_status' => '1',
                'service_author' => 'Sanjaya Senevirathne',
                'service_description' => $api_builder_content,
                'service_url' => 'http://icovden.com/cloud-service/api-builder',
                'service_provider' => 'SourceWallet Dev',
                'cover_image' => 'apibuilder_cover.jpg',
                'icon_image' => 'apibuildericon.png',
                'status' => '1',
                'service_price' => null,
                'token' => 'GMTLE767252GMEL87252GLEK66275',
            ]
        );

        DB::table('cloud_service')->insert(
            [
                'service_name' => 'AuthFactor',
                'payment_status' => '1',
                'service_author' => 'Sanjaya Senevirathne',
                'service_description' => $auth_service_content,
                'service_url' => 'http://icovden.com/cloud-service/api-builder',
                'service_provider' => 'SourceWallet Dev',
                'cover_image' => 'auth_factor_cover.jpg',
                'icon_image' => 'auth_factoricon.png',
                'status' => '1',
                'service_price' => null,
                'token' => 'GMLESJ7362GLEOOLEm67252GMEL872S',
            ]
        );


        DB::table('cloud_service')->insert(
            [
                'service_name' => 'Qulint Builder',
                'payment_status' => '1',
                'service_author' => 'Sanjaya Senevirathne',
                'service_description' => $qulint_service_content,
                'service_url' => 'http://icovden.com/cloud-service/api-builder',
                'service_provider' => 'Qulint Design Lab',
                'cover_image' => 'qulint_design_cover.jpg',
                'icon_image' => 'qulint_icon.png',
                'status' => '1',
                'service_price' => null,
                'token' => 'TRLMSJKE276G27672EERQLSANQJ2234U',
            ]
        );

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



        Settings::add_settings('logo','logo.png');
        Settings::add_settings('homepage_feature_section','true');
        Settings::add_settings('footer_color','#222222');
        Settings::add_settings('homepage_custom_solution_section','true');
        Settings::add_settings('homepage_custom_solution_title','Looking for custom solutions');
        Settings::add_settings('homepage_custom_solution_description','Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.');
        Settings::add_settings('homepage_custom_solution_button','Request free solution');
        Settings::add_settings('homepage_custom_solution_link','url');


        Model::unguard();

        $this->truncateMultiple([
            'cache',
            'failed_jobs',
            'ledgers',
            'jobs',
            'sessions',
        ]);

        $this->call(
            [
                AuthTableSeeder::class,
            ]
        );

        Model::reguard();
    }
}
