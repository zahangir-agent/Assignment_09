<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('pages.home');
});


Route::get('/home', function () {
   return view('pages.home');
});


Route::get('/about', function () {
    return view('pages.about');
});


Route::get('/project', function () {
    return view('pages.project');
});


Route::get('/contact', function () {
    return view('pages.contact');
});


Route::get('/skills', function () {
    return view('pages.skills');
});
