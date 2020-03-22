<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Blog extends Model
{

    protected $table = 'blog_table';

    protected $primaryKey = 'id';


    public static function get_blog_by_id ($id)
    {
        $blog_details = DB::table('blog_table')
            ->where('id',$id)
            ->first();

        return $blog_details;
    }

}


