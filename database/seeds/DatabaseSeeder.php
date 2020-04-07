<?php

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;
use App\Http\Controllers\CommonFunctions\ServiceContents;

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
