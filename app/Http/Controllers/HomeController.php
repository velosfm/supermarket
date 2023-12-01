<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use File;
use Illuminate\Support\Str;

class HomeController extends Controller
{
    public function index() 
    {
        return view('Home.index');
    }

    public function kalathi() 
    {
        $basket_data = File::get(base_path('database/jsondata/basket.json'));
        $json = json_decode($basket_data, true);
        $rets = $json['retailers'];
        //$json = json_decode($basket_data, true);
        //foreach($json['retailers'] as $ret)
       //{ 
        //foreach ($rets as $ret);
        //$nme = Str::before($ret['logo'], '.png');
               // dd( $nme);
        return view('Home.kalathi')->with('basket_data', json_decode($basket_data, true));
    }

    public function laxanika() 
    {
        $basket_data = File::get(base_path('database/jsondata/freshbasket.json'));
        return view('Home.laxanika')->with('basket_data', json_decode($basket_data, true));
    }

    public function about() 
    {
        return view('Home.about');
    }

    public function faq() 
    {
        return view('Home.faq');
    }

    public function ab() 
    {
        return view('Home.ab');
    }


}
