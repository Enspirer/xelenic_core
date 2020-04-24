<?php

namespace App\Http\Controllers\Frontend\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\CloudService;


class FileManagerContoller extends Controller
{

    public function index()
    {
        $services = CloudService::all();

        return view('frontend.user.filemanager.index',['services_fuck' => $services  ]);
    }

    public function filemanager()
    {
        dd('filemanger');
    }

    public function store(Request $request)
    {
        if($request->has('thumbs_img')) {
            $filenameWithExt = $request->file('thumbs_img')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('thumbs_img')->getClientOriginalExtension();
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            $path = $request->file('thumbs_img')->    storeAs('public/service_img', $fileNameToStore);



        } else {
            $fileNameToStore = 'noimage.jpg';
        }

    }

    public function edit($id)
    {

    }

    public function create()
    {

    }
}
