<?php

use Illuminate\Database\Seeder;
use DB;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */



    public function run()
    {
       $service_description =  'From API Builder V4.0.0 onward, you can now create your independent
         services for containerization and deployment on your container platform of choice.this first version, 
         you will be able to install the API Builder CLI, create a new project, and run it from the command line, 
         all without the need to create a user account or host your project on the Axway platform.API Builder lets
          you build and deploy a project that is comprised of API endpoints that can be consumed by any client application.
           An API Builder project is a Node.js application that runs as a service and is comprised of several components.
            You can either define the components using JavaScript or JSON files placed in specific directories, which are 
            automatically loaded when creating an API Builder instance or programmatically create components after initializing 
            an API Builder instance. For information about the components, see the sections below';


        DB::table('cloud_service')->insert(
            [
                'service_name' => 'API Builder',
                'payment_status' => '1',
                'service_description' => $service_description,
                'service_url' => 'http://icovden.com/cloud-service/api-builder',
                'service_provider' => 'SourceWallet Dev',
                'cover_image' => 'apibuilder_cover.jpg',
                'icon_image' => 'apibuildericon.png',
                'status' => '1',
                'service_price' => null,
                'token' => 'GMTLE767252GMEL87252GLEK66275',
            ]
        );
    }
}
