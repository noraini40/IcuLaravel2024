<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use Illuminate\Routing\Route as RoutingRoute;
use App\Http\Controllers\FeedController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/lamanUtama', function () {
    return view('home');

})->name('home');

// Route::get('/home/{name}', function ($name) {
//     return view('home',{'name'->$name});


Route::middleware('guest')->group(function(){

  Route::get('/auth/signin', [AuthController::class, 'signIn'])->name('auth.signin');
    Route::get('/auth/signup', [AuthController::class, 'signUp'])->name('auth.signup');
    
    Route::post('/auth/store', [AuthController::class, 'storeUser'])->name('auth.store');
    Route::post('/auth/authenticate', [AuthController::class, 'authenticate'])->name('auth.authenticate');
});
    
    Route::get('/auth/logout', [AuthController::class,'logout'])->name('auth.logout');


require __DIR__.'/feed/web.php';

//Named Route
// Route::get('/user/profile', function () {
  //  return 'Pengguna Profile Baru Noraini';
//})->name('user.profile');




//Route Param
//Route::get('/user/{name}', function ($name) {
   // return 'User '.$name;
//});
// alias of a route userProfile=/user/profile




//redirect route to named route
//
//redirect route to named route
//kena tengok semula
//Route::name('/job')prefix ('job')->group (function(){
    
  //  route::get ('home', function(){
    //    return 'Job home page';

    //})->name('.home');
    //route:: get('/description',function(){
      //  return 'Job detail are following';

    //});->name ('.description')});

   // Route::name('job.')
    //->prefix('job')
    //->group(function() {

    //Route::get('home', function() {
      //  return 'Job home page';
    //})->name('home');

    //Route::get('description', function() {
     //   return 'Job details are following';
  //  })->name('description');
//});
