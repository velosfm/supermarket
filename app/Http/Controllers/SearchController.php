<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Goutte\Client;
use App\Classes\Super_markets;
use Spatie\Browsershot\Browsershot;

class SearchController extends Controller
{
    public function main_results(Request $request )
    {
        $query =  $request->input('search');
        //dd($query );
        return view('Search.main_results', compact('query'));
    }

    public function results(Request $request)
    {
        $query =  $request->input('search');
        $products= new Super_markets;
        $sk_prods = json_decode($products->sk_prods($request));
        $mkin_prods = json_decode($products->mkin_prods($request));
        $my_prods = json_decode($products->mymk_prods($request));
        //$ab_prods = $products->ab_prods($request);
        //dd($ab_prods);
        return view( 'Search.main_results', compact('sk_prods', 'mkin_prods', 'my_prods', 'query') );
   }

   public function test()
   {
    return view( 'Home.ab');
   }
}
