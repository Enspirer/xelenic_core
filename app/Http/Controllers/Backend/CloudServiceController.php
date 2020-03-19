<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\CloudService;

class CloudServiceController extends Controller
{
    public function index()
    {
        $cloud_service = CloudService::all();

        return view('backend.cloud_service_page',
            ['cloud_services'=>$cloud_service]);
    }

    public function insert (Request $request)
    {
        if($request->has('thumbs_img')) {
            $filenameWithExt = $request->file('thumbs_img')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('thumbs_img')->getClientOriginalExtension();
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            $path = $request->file('thumbs_img')->    storeAs('/images/service_img', $fileNameToStore);
        } else {
            $fileNameToStore = 'noimage.jpg';
        }

        $cloud_service = new CloudService();

        $cloud_service->service_name = $request->service_name;
        $cloud_service->service_author = $request->service_author;
        $cloud_service->payment_status = $request->payment_status;
        $cloud_service->service_description = $request->service_description;
        $cloud_service->service_url = $request->service_url;
        $cloud_service->service_provider = $request->service_provider;
        $cloud_service->cover_image = $fileNameToStore;
        $cloud_service->icon_image = 'no_img.jpg';
        $cloud_service->status = $request->status;
        $cloud_service->service_price = $request->service_price;
        $cloud_service->token = $request->service_token;
        $cloud_service->save();

        return back();
    }
}
