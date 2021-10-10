<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutPageController extends Controller
{
    public function index(){
        return view('landing.page.about.about', ['page' =>2]);
    }
}
