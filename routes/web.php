<?php

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

Route::get('/', [App\Http\Controllers\HomePageController::class,'index'])->name('home');
Route::get('about', [App\Http\Controllers\AboutPageController::class,'index'])->name('about');
Route::get('portfolio', [App\Http\Controllers\PortfolioPageController::class,'index'])->name('portfolio');
Route::get('contact', [App\Http\Controllers\ContactPageController::class,'index'])->name('contact');
Route::get('blog', [App\Http\Controllers\BlogPageController::class,'index'])->name('blog');
Route::get('blogpost', [App\Http\Controllers\BlogPostPageController::class,'index'])->name('blogpost');


// Route::get('/', function(){
//     $page=1;
//     return view('landing.page.home.home', compact('page'));
// })->name('home');

// Route::get('about', function(){
//     $page=2;
//     return view('landing.page.about.about', compact('page'));
// })->name('about');

// Route::get('portfolio', function(){
//     $page=3;
//     return view('landing.page.portfolio.portfolio', compact('page'));
// })->name('portfolio');

// Route::get('contact', function(){
//     $page=4;
//     return view('landing.page.contact.contact', compact('page'));
// })->name('contact');

// Route::get('blog', function(){
//     $page=5;
//     return view('landing.page.blog.blog', compact('page'));
// })->name('blog');
