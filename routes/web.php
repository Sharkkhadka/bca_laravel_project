<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/partition',function(){
    return view('new_bca');
}); 

Route::get('/project/create',function(){
    echo "<a href='/project/post'>Here</a>";
});

Route::get('/project/post',function(){
    return view('project.nested.nested_file');
});

