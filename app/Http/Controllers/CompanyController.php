<?php

namespace App\Http\Controllers;

use EasyWeChat\Foundation\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class CompanyController extends Controller
{
    public function about(Application $wechat)
    {
        $js = $wechat->js;
        $js->setUrl('magical.echofault.com/');
        Log::info($js->ticket());
        return view('simple-about', ['js' => $js]);
    }
}
