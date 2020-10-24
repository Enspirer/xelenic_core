<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LeedsController extends Controller
{
    public function service_complain()
    {

        return view('backend.leeds.service_complain');
    }

    public function customer_complain()
    {
        return view('backend.leeds.customer_complain');

    }


    public function sales_complain()
    {
        return view('backend.leeds.sales_complain');
    }

    public function feedback()
    {
        return view('backend.leeds.feedback');
    }
}
