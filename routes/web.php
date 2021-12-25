<?php

use Illuminate\Support\Facades\Route;

// use App\Http\Controllers\Admin\FrontendController; 
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;

use App\Http\Controllers\Frontend\FrontendController;



Route::get('/', function () {
    return view('welcome');
});
//show releted products 
 Route::get('/category', [FrontendController::class,'index']);
 Route::get('/categoryss', [FrontendController::class,'category']);
 Route::get('/view-category/{slug}', [FrontendController::class,'viewcategory']);
 
 Route::get('/category/{cate_slug}/{prod_slug}',[FrontendController::class,'productview']);




    Auth::routes();

   
    Route::middleware(['auth','isAdmin'])->group(function(){
 
    Route::get('/dashboard', 'App\Http\Controllers\Admin\FrontendController@index');
    Route::get('/categories', 'App\Http\Controllers\Admin\CategoryController@index');
    Route::get('/add-category', 'App\Http\Controllers\Admin\CategoryController@add');
    Route::post('/insert-category', 'App\Http\Controllers\Admin\CategoryController@insert');
    Route::get('/edit-category/{id}', [CategoryController::class,'edit']);
    Route::put('/update-category/{id}', [CategoryController::class,'update']);
    Route::get('/delete-category/{id}', [CategoryController::class,'destroy']);
    //add product
    Route::get('/products', [ProductController::class,'index']);
    Route::get('/add-products', [ProductController::class,'add']);
    Route::get('/index', [ProductController::class,'index']);
    Route::post('/insert-product', [ProductController::class,'insert']);
    Route::get('/update-product/{id}', [ProductController::class,'edit']);

    Route::put('/updates-products/{id}', [ProductController::class,'updates']);
    Route::get('/delete-product/{id}', [ProductController::class,'destroy']);
    Route::get('/show-product', [FrontendController::class,'index']);
  
    //  Panel\PanelController@index'
    });

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
