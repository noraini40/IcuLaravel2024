<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FeedController;

//Route::middleware('auth')->group(function(){
Route::middleware('auth')->group(function(){
    Route::get('/feeds',[FeedController::class,'index'])->name('feeds');
    Route::get('/feed/create',[FeedController::class,'create'])->name('feed.create');
    
    
    
    Route::post('/feed/store',[FeedController::class,'store'])->name('feed.store');
    Route::put('/feed/update/{feed}',[FeedController::class,'update'])->name('feed.update');
    Route::get('/feed/show/{feed}',[FeedController::class,'show'])->name('feed.show');
});

Route::middleware('guest')->group(function(){
});
    Route::get('/auth/signin', [AuthController::class, 'signIn'])->name('auth.signin');
    Route::get('/auth/signup', [AuthController::class, 'signUp'])->name('auth.signup');
    
    Route::post('/auth/store', [AuthController::class, 'storeUser'])->name('auth.store');
    Route::post('/auth/authenticate', [AuthController::class, 'authenticate'])->name('auth.authenticate');


Route::get('/auth/logout', [AuthController::class,'logout'])->name('auth.logout');
    
    

//Route::get('/feeds', function () {
 //   return view('pages.feed.index');
//})->name('feed.index');
 

