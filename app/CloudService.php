<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;


class CloudService extends Model
{
    protected $table = 'cloud_service';
    protected $primaryKey = 'service_id';

    public static function get_all_active_service()
    {
        $cloude_service = CloudService::where('status', 1)->get();

        return $cloude_service;
    }
}
