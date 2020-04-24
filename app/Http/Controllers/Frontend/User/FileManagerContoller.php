<?php

namespace App\Http\Controllers\Frontend\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\CloudService;
use App\ServiceModel\FileManager\FileManager;


class FileManagerContoller extends Controller
{

    public function index()
    {
       $get_files = FileManager::get_files();

        return view('frontend.user.filemanager.index',['get_files' => $get_files  ]);
    }

    public function filemanager()
    {
        dd('filemanger');
    }

    public function store(Request $request)
    {
        if($request->has('file')) {
            $file = $request->file('file');

            FileManager::add_file($file,'Appiine','roma');

            return 'Done';


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
