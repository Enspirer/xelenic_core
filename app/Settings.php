<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Settings extends Model
{
    protected $table = 'settings';
    protected $primaryKey = 'settings_id';

    public static function add_settings($settings_name, $key)
    {
        $settings_id = DB::table('settings')
            ->where('settings_id')
            ->InsertGetId(
                [
                    'settings_name' => $settings_name,
                    'key' => $key
                ]
            );

        return $settings_id;
    }
}
