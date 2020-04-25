<?php

namespace App\Http\Controllers\Frontend\CloudServices\Services;

use App\CloudService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\CommonFunctions\Entrosement;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\URL;

use App\ServiceModel\CloudAPIBuilder\CloudAPIBuilder;
use App\MyService;
use DB;
use App\ServiceModel\QulintBuilder\QulintPage;
use App\ServiceModel\QulintBuilder\Website;
use App\ServiceModel\QulintBuilder\Template;
class WebsiteBuilder extends Controller
{
    public static function main_activity($service_id)
    {
        $get_website_publsied = Website::get_websites(1);
        $get_website_unpublsied = Website::get_websites(0);
        $get_user_template = Template::get_templates_by_user();

        $api_builder_details = MyService::get_service_details_by_user(1);

        if ($api_builder_details == null)
        {


            $tanle = [
                'get_website_published' => $get_website_publsied,
                'get_website_unpublished' => $get_website_unpublsied,
                'get_user_templates' => $get_user_template,
                'service_id' => $service_id,
                'api_apps' => null
            ];

        }else {

            $get_apps = CloudAPIBuilder::get_apps('published');



            $tanle = [
                'get_website_published' => $get_website_publsied,
                'get_website_unpublished' => $get_website_unpublsied,
                'service_id' => $service_id,
                'api_apps' => $get_apps
            ];
        }








        return $tanle;
    }

    public function insert_page (Request $request)
    {
        $page_title = $request->page_title;
        $service_id = $request->service_id;
        $page_type = $request->page_type;
        $website_id = $request->website_id;


        $get_page_id = QulintPage::create_qulint_pages($page_title,$website_id,$service_id,$page_type,0,null,null,null);

        return back();
    }

    public function builder_panel ($q_id,$service_id)
    {

        $get_q_details = DB::table('qulint_pages')
            ->where('q_id',$q_id)
            ->where('user_id',auth()->user()->id)
            ->first();

        $get_service_details = DB::table('cloud_service')
            ->where('service_id',$service_id)
            ->first();

        $get_website_page = QulintPage::all_qulint_pages($get_q_details->website_id);



        return view('frontend.user.service_pages.QulintBuilder.pages.builder',
            [
                'service_id'=> $service_id,
                'get_service_details'=> $get_service_details,
                'q_details'=> $get_q_details,
                'get_pages'=> $get_website_page,
                'q_id'=> $q_id,
            ]
            );
    }

    public function save_page (Request $request)
    {
        $q_id = $request->q_id;
        $html = $request->html;

        QulintPage::save_page($q_id,$html);


    }


    public function preview_qulint ($q_id)
    {
       $get_qulint = DB::table('qulint_pages')
           ->where('q_id',$q_id)
           ->where('user_id',auth()->user()->id)
           ->first();

       return view('frontend.user.service_pages.QulintBuilder.pages.page_preview',['get_qulint'=>$get_qulint]);
    }

    public function save_website (Request $request)
    {
        $app_id = $request->app_id;
        $description = $request->description;
        $website_type = $request->website_type;
        $service_id = $request->service_id;
        $website_name = $request->website_name;

        Website::create_website($website_name,$service_id,$website_type,$app_id,$description,null);

        return back();


    }

    public function website_dashboard ($website_id,$website_key)
    {
        $get_website_details = DB::table('websites')
            ->where('website_id',$website_id)
            ->where('user_id',auth()->user()->id)
            ->first();

        $my_service_details = MyService::get_service_details($get_website_details->service_id);



        $get_qulint_page = QulintPage::all_qulint_pages($website_id);

        return view('frontend.user.service_pages.QulintBuilder.pages.website_dashboad',
            [
                'website_details'=>$get_website_details,
                'get_service_details' => $my_service_details,
                'get_qulint_pages_published'=>$get_qulint_page,
            ]);
    }

    public function create_template (Request $request)
    {
        $template_name = $request->template_name;
        $description = $request->description;
        $template_type = $request->template_type;
        $category = $request->category;
        $service_id = $request->service_id;

        $key = Entrosement::generate_APIKey(20);

      $get_template_id = Template::create_template($template_name,$description,$service_id,$key,$template_type,$category);

      return back();
    }

    public function edit_template ($template_id)
    {
        $my_service_details = MyService::get_service_details(3);

        return view('frontend.user.service_pages.QulintBuilder.pages.template_editor',[
            'get_service_details' => $my_service_details,
        ]);
    }

    public function view_template ($template_id)
    {
        dd('View Tempalte'.$template_id);
    }





}