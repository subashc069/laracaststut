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
// passing data to a view
// Route::get('/', function () {

//     $tasks=[
//         'Go to Market',
//         'Go to Shop',
//         'Go to Home',
//     ];
//     // return view('welcome',[
//     //     'tasks'=>$tasks
//     // ]);
//     return view('welcome')->withTasks($tasks)->withFoo('foobar');
// });
Route::get('/','PagesController@home');
Route::get('/about','PagesController@about');
Route::get('/contact','PagesController@contact');
// Route::get('/contact', function(){
//     return view('contact');
// });

// Route::get('/about', function(){
//     return view('aboutus');
// });