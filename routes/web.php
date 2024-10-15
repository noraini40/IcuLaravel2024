<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/lamanUtama', function () {
    return view('home');

})->name('home');

Route::get('/home/{name}', function ($name) {
    return view('home',['name'=>$name]);

});

Route::get('/signin', function () {
    return view('auth.signin');
});

//Named Route
Route::get('/user/profile', function () {
    return 'Pengguna Profile Baru Noraini';
})->name('user.profile');


//Route Param
Route::get('/user/{name}', function ($name) {
    return 'User '.$name;
});
// alias of a route userProfile=/user/profile




//redirect route to named route
Route::get('/redirect-to-profile',function(){
    return redirect ()->route ('user.Profile');
});
//route group
Route::prefix('food')->group(function(){
    route::get ('/details', function(){
        return 'Food detail are following';

    });
    route :: get('/home',function(){
        return 'Food home page';

    });
});

//redirect route to named route
//kena tengok semula
//Route::name('/job')prefix ('job')->group (function(){
    
  //  route::get ('home', function(){
    //    return 'Job home page';

    //})->name('.home');
    //route:: get('/description',function(){
      //  return 'Job detail are following';

    //});->name ('.description')});

    Route::name('job.')
    ->prefix('job')
    ->group(function() {

    Route::get('home', function() {
        return 'Job home page';
    })->name('home');

    Route::get('description', function() {
        return 'Job details are following';
    })->name('description');
});