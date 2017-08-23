<?php

namespace App\Http\Controllers;

use EasyWeChat\Foundation\Application;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function about(Application $wechat)
    {
        $js = $wechat->js;
        return view('simple-about', ['js' => $js]);
    }
}
