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

    public function edit($id)
    {

    }

    public function create()
    {

    }
}
