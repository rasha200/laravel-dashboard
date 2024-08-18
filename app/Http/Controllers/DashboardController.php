<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function mainpage(){
        return view('layouts/master');
    }
    public function page1(){
        return view('dashpage1');
    }
    public function page2(){
        return view('dashpage2');
    }

    public function page3(){
        return view('dashpage3');
    }
}
