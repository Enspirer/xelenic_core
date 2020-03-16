<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Blog;
use Illuminate\Http\Request;

/**
 * Class DashboardController.
 */
class BlogController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $blog = blog::all();

        return view('backend.blog_page',
            ['blogs'=>$blog]);
    }

    public function upload_image (Request $request)
    {
        if($request->hasFile('upload')) {
            $originName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = $fileName.'_'.time().'.'.$extension;

            $request->file('upload')->move(public_path('images'), $fileName);

            $CKEditorFuncNum = $request->input('CKEditorFuncNum');
            $url = asset('images/'.$fileName);
            $msg = 'Image uploaded successfully';
            $response = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";

            @header('Content-type: text/html; charset=utf-8');
            echo $response;
        }
    }

}
