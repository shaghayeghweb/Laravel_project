<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\CommentsController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Auth::routes();

Route::get('/' , function () { return auth::check()
    ? redirect()->route('profile') : redirect()->route('login'); });

///*Login Routs*/
//Route::get('/login' , [LoginController::class , 'showLoginForm'])->name('loginForm');
//Route::post('/login' , [LoginController::class , 'login'])->name('login');


/*Register Rout*/
//Route::get('/register' , [RegisterController::class , 'showRegisterForm'])->name('register');
//Route::get('/' , [MainController::class , 'index'] );
Route::middleware('auth')->group(function () {
    Route::get('/profile', [MainController::class, 'profile'])->name('profile');
    Route::get('/product/list', [ProductController::class, 'productList'])->name('productList');
    Route::get('/product/addPage', [ProductController::class, 'addProductPage'])->name('addProductPage');
    Route::post('/product/add', [ProductController::class, 'addProduct'])->name('addProduct');
    Route::get('/product/delete/{slug}', [ProductController::class, 'deleteProduct'])->name('deleteProduct');
    Route::get('/product/updatePage/{slug}', [ProductController::class, 'updatePage'])->name('updateProductPage');
    Route::post('/product/update/{slug} ', [ProductController::class, 'updateProduct'])->name('updateProduct');
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    /*Comments*/
    Route::get('/comments/list', [CommentsController::class, 'showComments'])->name('showComments');
    Route::get('/comments/publish/{id}', [CommentsController::class, 'publishComment'])->name('publishComment');
    Route::get('/comments/delete/{id}', [CommentsController::class, 'deleteComment'])->name('deleteComment');
//Category
    Route::get('/category/list', [mainController::class, 'categoryList'])->name('categoryList');
    Route::post('/category/add', [mainController::class, 'addCategory'])->name('addCategory');
    Route::get('/category/delete/{slug}', [mainController::class, 'deleteCategory'])->name('deleteCategory');
    Route::get('/category/updatePage/{slug}', [mainController::class, 'updateCategoryPage'])->name('updateCategoryPage');
    Route::post('/category/update/{slug}', [mainController::class, 'updateCategory'])->name('updateCategory');
    Route::post('/category/enable/{slug}' , [mainController::class, 'enableCategory'])->name('enableCategory');
    Route::post('/category/disable/{slug}' , [mainController::class, 'disableCategory'])->name('disableCategory');

//User
    Route::get('/user/list', [UserController::class, 'userList'])->name('userList');
    Route::get('/user/delete/{id}', [UserController::class, 'deleteUser'])->name('deleteUser');
    Route::get('/user/updatePage/{id}', [UserController::class, 'updateUserPage'])->name('updateUserPage');
    Route::post('/user/update/{id}', [UserController::class, 'updateUser'])->name('updateUser');
    Route::get('/user/profile/{id}', [UserController::class, 'userProfile'])->name('userProfile');



});
