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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('welcome');
})->middleware('test');

Route::get('signup', function () {
    return view('signup');
});

Route::get('login', function () {
    return view('login');
});

Route::get('dashboard', function () {
    return view('dashboard');
});



//Route::get('insert','StudInsertController@insertform');
Route::post('signup','PhotoController@store');
Route::post('login','PhotoController@show');
Route::get('dashboard','PhotoController@edit');
Route::get('signup', 'PhotoController@country');
