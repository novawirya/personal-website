<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogPageController extends Controller
{
    public function index(){
        return view('landing.page.blog.blog', ['page' => 5]);
    }
}
