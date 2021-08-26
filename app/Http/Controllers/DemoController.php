<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
    //
    public function demoHarry(){
        return view('harry');
    }

    public function routeParam($id, $second, $fourth){
        dd($id, $second, $fourth);
        // dump and die
        // return view('routeParam');
    }

    public function flex(){
        return view('flex.flex');
    }

    public function product(){
        return view('product.index');
    }

    public function task(){
        return view('task.task');
    }
}
