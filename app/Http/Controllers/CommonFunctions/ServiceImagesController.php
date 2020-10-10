<?php

namespace App\Http\Controllers\CommonFunctions;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use File;
use Response;

class ServiceImagesController extends Controller
{
    public function index($images)
    {
        $path = 'storage/service_img/' . $images;


        if(!File::exists($path)) {
            $path = public_path() . "/images/service_dummy.jpg";
            $file = File::get($path);
            $type = File::mimeType($path);
            $response = Response::make($file, 200);
            $response->header("Content-Type", $type);
            return $response;

        }

        $file = File::get($path);
        $type = File::mimeType($path);

        $response = Response::make($file, 200);
        $response->header("Content-Type", $type);

        return $response;
    }
}
