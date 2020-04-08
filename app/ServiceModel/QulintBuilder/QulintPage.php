<?php

namespace App\ServiceModel\QulintBuilder;

use Illuminate\Database\Eloquent\Model;
use DB;

class QulintPage extends Model
{
    protected $table = 'qulint_pages';
    protected $primaryKey = 'q_id';

    public static function get_published_pages()
    {
        $get_published_pages = DB::table('qulint_pages')
            ->where('user_id',auth()->user()->id)
            ->where('status',1)
            ->get();

        return $get_published_pages;
    }

    public static function get_unpublished_pages()
    {
        $get_unpublsiehd_pages = DB::table('qulint_pages')
            ->where('user_id',auth()->user()->id)
            ->where('status',0)
            ->get();
        return $get_unpublsiehd_pages;
    }

    public static function create_qulint_pages($title,$service_id,$type,$status,$custom_script_up,$custom_script_down,$body)
    {
        $get_page_id =  DB::table('qulint_pages')
            ->InsertGetId(
              [
                  'title'=>$title,
                  'service_id'=>$service_id,
                  'type'=>$type,
                  'status'=>$status,
                  'user_id'=>auth()->user()->id,
                  'custom_script_up'=>$custom_script_up,
                  'custom_script_down'=>$custom_script_down,
                  'body'=>$body,
              ]
            );

        return $get_page_id;
    }


}
