<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AreaController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\EateryController;
use App\Http\Controllers\SignUpController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\MerchantController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MerchSignUpController;

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

Route::get('/about',[ContactController::class,'index']);
Route::get('/contact',function(){
    return view('contact',[
        'title' => 'Contact',
    ]);
});

Route::get('/eatery',[EateryController::class,'index']);
Route::get('/foodies',function (){return view('foodies',['title' => 'Eatery']);});

Route::get('/profile',function(){
    return view('profile.index',[
        'title' => 'Profile',
    ]);
})->middleware('auth');

//signup
Route::get('/signup',[SignUpController::class,'index'])->middleware('guest');
Route::post('/signup',[SignUpController::class,'store']);


//login
Route::get('/login',[LoginController::class,'index'])->middleware('guest');
Route::post('/login',[LoginController::class,'login']);
Route::post('/logout',[LoginController::class,'logout']);

//admin
Route::get('/dashboard',[DashboardController::class,'index'])->middleware('admin');
Route::get('/merchreg-approve',[DashboardController::class,'showMerchReg'])->middleware('admin');
Route::post('/merch-approve/{id}',[DashboardController::class,'approve'])->name('merch.approve');
Route::post('/merch-reject/{id}',[DashboardController::class,'reject'])->name('merch.reject');

//merchant
Route::get('/merch-signup',[MerchSignUpController::class,'index'])->middleware('auth');
Route::get('/merchdash',[MerchantController::class,'index']);
Route::post('/merch-signup',[MerchSignUpController::class,'store']);
Route::get('/merchdash/{id}',[MerchantController::class,'showMerch']);
Route::get('/merchprofile/{id}',[MerchantController::class,'profile']);

//product
Route::get('/add_product/{id}',[MerchantController::class,'addProductDisplay']);
Route::get('/foodies/{id}',[ProductController::class,'index']);
Route::post('add-product',[ProductController::class,'store']);




Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/area',[AreaController::class,'index'])->middleware('admin');

Route::post('/area',[AreaController::class,'store']);

Route::post('/delete-area/{id}',[AreaController::class,'destroy']);


//update profile
Route::get('/changepass',function (){return view('profile.password',['title' => 'Password']);});
Route::post('/updatepassword',[UserController::class,'updatePassword'])->name('updatePassword');

Route::get('/change-email',function (){return view('profile.email',['title'=> 'Email']);});
Route::post('/update-email',[UserController::class,'changeEmail']);

Route::get('/change-username',function(){return view('profile.username',['title' => 'Username']);});

//update merchant profile

Route::put('/edit/{id}',[MerchantController::class,'editMerchProfile'])->name('merchants.edit');

Route::get('/bank/{id}',[MerchantController::class,'bankEditView'])->name('merchbank');

//foods
Route::post('/addtocart',[OrderController::class,'cartOrOrdered'])->name('cart.add');
Route::get('/addcart/{id}',[OrderController::class,'index'])->name('addcart');

