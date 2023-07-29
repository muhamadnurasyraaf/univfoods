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
    return view('home',[
        'title' => 'Home',
    ]);
});

Route::get('/about',function(){
    return view('about',[
        'title' => 'About',
    ]);
});

Route::get('/contact',function(){
    return view('contact',[
        'title' => 'Contact',
    ]);
});

Route::get('/eatery',function(){
   return view('eatery',[
    'title' => 'Eatery',
   ]); 
});

Route::get('/profile',function(){
    return view('profile',[
        'title' => 'Profile',
    ]);
});