<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\FilterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/', function () {
    return view('index');
});

Route::get('/' ,[HomeController::class,'index'])->name('index');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'profile'])->name('home');

Route::get('/search', [FilterController::class, 'search'])->name('search');
Route::get('/shop' ,[ProductController::class,'shop_page'])->name('shop');
Route::get('/book-rating' , [FilterController::class,'rating'])->name('rating');
Route::get('/book-suggest',[FilterController::class,'suggest'])->name('suggest');
Route::get('/product/{slug}',[ProductController::class,'product_single'])->name('product');
Route::get('/category/{slug}' , [ProductController::class,'category'])->name('category');
Route::get('/author-category/{slug}' , [ProductController::class,'author'])->name('author');
Route::get('/about-us' , [HomeController::class,'about'])->name('about');
//Route::get('/book_fav',[FilterController::class,'favorite'])->name('fav');
Route::get('/author-single/{slug}' , [AuthorController::class,'author_single'])->name('author-single');
Route::get('/authors' , [AuthorController::class,'authors'])->name('authors');

//Login routes
Route::get('/login' ,[LoginController::class,'showLoginForm'])->name('login');
Route::post('/login' , [LoginController::class,'login'])->name('login.send');

//Register route
Route::post('/register', [RegisterController::class, 'register'])->name('registerform');

//update
Route::post('/update-user', [UserController::class, 'update'])->name('update');

//wish list
Route::get('/add-to-favorite/{id}', [ProductController::class , 'add_to_favorite'])->name('add-to-favorite');
Route::get('/favorite-list' , [ProductController::class , 'show_favorite_list'])->name('show-favorite-list');

//address
Route::get('/add-address',[UserController::class, 'add_address'])->name('add-address');

//cart
Route::get('/cart',[CartController::class, 'show_cart'])->name('show_cart');
Route::post('/add-to-cart/{slug}' , [CartController::class, 'add_to_cart'])->name('add_to_cart');

//comment
Route::post('/comment/publish/{slug}' , [ProductController::class , 'commentPublish'])->name('commentPublish');
