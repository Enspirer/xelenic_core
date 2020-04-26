<?php

namespace App\ServiceModel\FileManager;

use Illuminate\Database\Eloquent\Model;
use DB;
use Response;
use File;

class FileManager extends Model
{
    public static function add_file($file,$description,$tag)
    {
        $filenameWithExt = $file->getClientOriginalName();
        $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
        $extension = $file->getClientOriginalExtension();
        $fileNameToStore = $filename.'_'.time().'.'.$extension;
            $path = $file->storeAs('public/user_storage/user_id_'.auth()->user()->id.'/'.$extension, $fileNameToStore);
            $size = $file->getSize();
        $file_id = DB::table('file_manager')
            ->InsertGetId(
                [
                    'file_name' => $fileNameToStore,
                    'user_id' => auth()->user()->id,
                    'size' => $size,
                    'file_path' => $path,
                    'file_type' => $extension,
                    'description' => $description,
                    'tag' => $tag,
                ]
            );
    }



    public static function get_files()
    {
        $get_files = DB::table('file_manager')
            ->where('user_id' , auth()->user()->id)
            ->get();

        return $get_files;
    }

    public static function core_magnet()
    {

    }

    public static function get_files_by_type($type)
    {
        $get_files = DB::table('file_manager')
            ->where('file_type',$type)
            ->where('user_id' , auth()->user()->id)
            ->get();

        return $get_files;

    }
}
