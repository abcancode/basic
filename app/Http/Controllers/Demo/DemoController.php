<?php

namespace App\Http\Controllers\Demo;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DemoController extends Controller
{
    public function Index(){
        return view('about');
    }

    public function ContactMethod(){
        return view('contact');
    }
}
