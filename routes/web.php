<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Demo\DemoController;

Route::get('/', function () {
    return view('welcome');
});

Route::controller(DemoController::class)->group(function (){
    Route::get('/about', 'Index')->middleware('check');
    //Route::get('/about', 'Index')->name('about.page');
    Route::get('/contact', 'ContactMethod')->name('contact.page');
});

//Route::controller(DemoController::class)->group(function (){
  //  Route::get('/about', [DemoController::class, 'Index'])->name('about.page');
    //Route::get('/contact', [DemoController::class, 'ContactMethod']);
//});
