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
        dd();
    }







}
