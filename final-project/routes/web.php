<?php

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
Route::get('/',function(){
    return view('work2/ad_rod');
});
Route::get('/ad_rod',function(){
    return view('work2/ad_rod');
});
Route::get('/ad_reel',function(){
    return view('work2/ad_reel');
});
Route::get('/ad_line',function(){
    return view('work2/ad_line');
});
Route::get('/ad_hook',function(){
    return view('/work2/ad_hook');
});
Route::resource('reel','ReelsController');
Route::resource('line','LinesController');
Route::resource('rod','RodsController');
Route::resource('hook','HooksController');



