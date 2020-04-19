<?php

namespace App\ServiceModel\QulintBuilder;

use Illuminate\Database\Eloquent\Model;
use DB;
use App\Http\Controllers\CommonFunctions\Entrosement;

class Template extends Model
{
    protected $table = 'qulint_templates';
    protected $primaryKey = 'template_id';


    public static function create_template ($template_name,$description,$service_id,$key,$type,$category)
    {
       $id = DB::table('qulint_templates')
            ->InsertGetId(
                [
                  'template_name' => $template_name,
                  'description' => $description,
                  'service_id' => $service_id,
                  'key' => $key,
                  'user_id' => auth()->user()->id,
                  'script_header' => null,
                  'script_footer' => null,
                  'body' => null,
                  'type' => $type
                ]
            );

       return $id;
    }

    public static function get_templates_by_user ()
    {
        $get_templates = DB::table('qulint_templates')
            ->where('user_id',auth()->user()->id)
            ->get();

        return $get_templates;
    }

    public static function save_template ($template_id,$body)
    {
        DB::table('qulint_templates')
            ->where('template_id',$template_id)
            ->update([
                'body' => $body
            ]);
        return 'Body Saved Successful';
    }







}
