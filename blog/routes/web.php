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
Route::get('/lib_index_rod',function(){
    return view('lib/index_rod');
});
Route::get('/lib_index_reel',function(){
    return view('lib/index_reel');
});
Route::get('/lib_index_line',function(){
    return view('lib/index_line');
});
Route::get('/work_create_rod',function(){
    return view('work/create_rod');
});
Route::resource('reel','ReelsController');
Route::resource('line','LinesController');
Route::resource('rod','RodsController');



