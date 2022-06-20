<?php

namespace App\Http\Controllers\vendor\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class settingController extends Controller
{
    public function basicSetting()
    {
        return view('vendor.admin.basic-setting');
    }
}
