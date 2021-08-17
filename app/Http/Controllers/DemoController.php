<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
    //
    public function demoHarry(){
        return view('harry');
    }

    public function routeParam($id){
        dd($id);
        // dump and die
        // return view('routeParam');
    }
}
