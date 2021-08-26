<?php

use App\Http\Controllers\DemoController;
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

Route::get('/blog', function () {
    echo "boom";
});

Route::get('/project', function () {
    echo "in project";
});

// Route::get('/harry', function () {
//     // enter the name of file before .blade.php;
//     return view('harry');
// });

// to add controller directly in to route
Route::get('/harry', [DemoController::class, 'demoHarry']);

Route::get('/sherlock', function () {
    // to access file inside a folder = foldername.filename
    return view('sherlock.sherlock');
});

Route::get('/code/{id}/{second_id}/{third}', [DemoController::class, 'routeParam']);

Route::get('/flex', [DemoController::class, 'flex']);
Route::get('/product', [DemoController::class, 'product']);
Route::get('/task', [DemoController::class, 'task']);



// available functions

// Get = reads
// Route::get();

// POST = store/creat
// Route::post();

// Put = update
// Route::put();

// delete = delete
// Route::delete();
// Route::patch();