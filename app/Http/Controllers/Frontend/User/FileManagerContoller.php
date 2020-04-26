<?php

namespace App\Http\Controllers\Frontend\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\CloudService;
use App\ServiceModel\FileManager\FileManager;
use File;
use Response;
use DB;

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



    public static function view_file ($file_id,$file_name)
    {
        $data = DB::table('file_manager')->where('file_id', $file_id)->first();
        $path = 'storage/' .'user_storage/'.'user_id_'.$data->user_id.'/'.$data->file_type.'/'. $data->file_name;
        if(!File::exists($path))
            $path = storage_path('app/public/lesson_image_contents/') . 'default.png';
        $file = File::get($path);
        $type = File::mimeType($path);
        $response = Response::make($file, 200);
        $response->header("Content-Type", $type);
        return $response;
    }

    public function get_files_api($type)
    {
       $files = FileManager::get_files_by_type($type);

       return $files;
    }



}
