<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Settings;

class SettingsController extends Controller
{
    public function index()
    {
        return view('backend.main_settings');
    }

    public function store(Request $request)
    {
//        Settings::set_settings('','');

        dd($request);
    }
}
