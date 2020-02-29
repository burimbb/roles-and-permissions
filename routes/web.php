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

auth()->loginUsingId(1);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/role/admin', function(){
    return "hello from admin panel";
});

Route::get('/role/head', function(){
    return "hello from head panel";
});

Route::get('/permission/view', function(){
    return "hello from view permission";
})->middleware('can:view only');

Route::get('/permission/edit', function(){
    return "hello from edit permission";
})->middleware('can:edit-articles');
