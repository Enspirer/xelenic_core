<?php

namespace App\Http\Controllers\CommonFunctions;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServiceContents extends Controller
{
    public static function api_builder_content() {

        $service_description =  'From API Builder V4.0.0 onward, you can now create your independent
         services for containerization and deployment on your container platform of choice.this first version, 
         you will be able to install the API Builder CLI, create a new project, and run it from the command line, 
         all without the need to create a user account or host your project on the Axway platform.API Builder lets
          you build and deploy a project that is comprised of API endpoints that can be consumed by any client application.
           An API Builder project is a Node.js application that runs as a service and is comprised of several components.
            You can either define the components using JavaScript or JSON files placed in specific directories, which are 
            automatically loaded when creating an API Builder instance or programmatically create components after initializing 
            an API Builder instance. For information about the components, see the sections below';

        return $service_description;
    }

    public static function auth_service_content()
    {
        $service_description =  'You can create serverless auth service for your web application,if you want 
        to create-big impltmetantion, Yu can create_engine_builder.Node.js application that runs as a service and is comprised of several components.
            You can either define the components using JavaScript or JSON files placed in specific directories, which are 
            automatically loaded when creating an API Builder instance or programmatically create components after initializing 
            an API Builder instance. For information about the components, see the sections belowNode.js application that runs as a service and is comprised of several components.
            You can either define the components using JavaScript or JSON files placed in specific directories, which are 
            automatically loaded when creating an API Builder instance or programmatically create components after initializing 
            an API Builder instance. For information about the components, see the sections belowNode.js application that runs as a service and is comprised of several components.
            You can either define the components using JavaScript or JSON files placed in specific directories, which are 
            automatically loaded when creating an API Builder instance or programmatically create components after initializing 
            an API Builder instance. For information about the components, see the sections below';

        return $service_description;
    }

    public static function qulint_service_content()
    {
        $service_description =  'Qulint is cloud based web development service.It allows uses create HTML5 Websites 
        and mobile sites throug the use of online drag and drop tools.A powerful web design tool for creating responsive websites
         using the Bootstrap ... and powerful interface, which is built around the simplicity of drag and drop.For information
          about the components, see the sections belowNode.js  application that runs as a service and is comprised of several 
          components. You can either define the components using JavaScript or JSON files placed in specific directories, which are 
            automatically loaded when creating an API Builder instance or programmatically create components after initializing 
            an API Builder instance. For information about the components, see the sections below';


        return $service_description;
    }
}
