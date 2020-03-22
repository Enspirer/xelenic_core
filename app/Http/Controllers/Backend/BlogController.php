<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Blog;
use Illuminate\Http\Request;
use DB;

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

    public function create (Request $request)
    {

        $slug = $request->slug;
        $stripped_slug = str_replace(' ', '', $slug);
        if($request->has('thumbs_img')) {
            $filenameWithExt = $request->file('thumbs_img')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('thumbs_img')->getClientOriginalExtension();
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            $path = $request->file('thumbs_img')->    storeAs('public/blog_thumb', $fileNameToStore);
        } else {
            $fileNameToStore = 'noimage.jpg';
        }

        $blog = new Blog();

        $blog->blog_title = $request->blog_title;
        $blog->slug = $stripped_slug;
        $blog->description = $request->description;
        $blog->thums_img = $path;
        $blog->body = $request->blog_body;
        $blog->user_id = auth()->user()->id;
        $blog->save();

        return back();
    }

    public function edit_blog ($blog_id)
    {
        $blog = blog::get_blog_by_id($blog_id);



        return view('backend.edit_pages.blog_edit',
            ['blog_details'=>$blog]);
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

    public function update(Request $request)
    {
        App\Flight::where('active', 1)
            ->where('destination', 'San Diego')
            ->update(['delayed' => 1]);
    }

    public function delete ($id)
    {
        DB::table('blog_table')
            ->where('id',$id)
            ->delete();

        return back();
    }

}
