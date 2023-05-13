<?php

use App\Http\Controllers\DashboardClientController;
use App\Http\Controllers\DashboardServicesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('home', [
        "title" => "Home",
        "href" => "#hero"
    ]);
});
Route::get('/services', function () {
    return view('services', ["title" => "Services", "href" => "/"]);
});
