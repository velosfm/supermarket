<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function main_results(Request $request )
    {
        $query =  $request->input('search');
        //dd($query );
        return view('Search.main_results', compact('query'));
    }
}
