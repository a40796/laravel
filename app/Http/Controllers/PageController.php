<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    function pb(Request $request){
        $version = $request->input('version');
        return view('pb',['version' => $version]);
    }
}
