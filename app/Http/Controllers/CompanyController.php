<?php

namespace App\Http\Controllers;

use EasyWeChat\Foundation\Application;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function about(Application $wechat)
    {
        $js = $wechat->js;
        $js->setUrl('magical.echofault.com');
        return view('simple-about', ['js' => $js]);
    }
}
