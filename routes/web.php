<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Demo\DemoController;

Route::get('/', function () {
    return view('welcome');
});

Route::controller(DemoController::class)->group(function (){
    Route::get('/about', [DemoController::class, 'Index']);
    Route::get('/contact', [DemoController::class, 'ContactMethod']);
});

//Route::get('/contact', function () {
  //  return view('contact');
//});

//Route::get('/contact', function () {
  //  echo "<h1>This is the Contact Page</h1>";
//});