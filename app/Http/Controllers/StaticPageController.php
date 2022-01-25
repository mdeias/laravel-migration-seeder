<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPageController extends Controller
{
    public function about(){
        return view('about');
    }

    public function contacts(){
        return view('contacts');
    }
}
