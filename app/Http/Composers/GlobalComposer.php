<?php

namespace App\Http\Composers;

use Illuminate\View\View;
use App\MyService;

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

           $view->with('my_courses_r',$get_my_courses);
       }




        $view->with('logged_in_user', auth()->user());
    }
}
