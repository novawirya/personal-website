<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogPostPageController extends Controller
{
    public function index(){
        return view('landing.page.blogpost.blogpost', ['page' =>6]);
    }
}
