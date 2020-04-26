<?php

namespace App\Http\Composers;

use Illuminate\View\View;
use App\MyService;
use App\ServiceModel\FileManager\FileManager;

/**
 * Class GlobalComposer.
 */
class GlobalComposer
{
    /**
     * Bind data to the view.
     *
     * @param View $view
     */
    public function compose(View $view)
    {
       if (auth()->user() == null)
       {

       }else{
           $get_my_courses = MyService::get_current_user_services();
           $get_my_files = FileManager::get_files();
           $view->with(
               'my_courses_r',$get_my_courses,
               'get_my_files',$get_my_files
           );
       }




        $view->with('logged_in_user', auth()->user());
    }
}
