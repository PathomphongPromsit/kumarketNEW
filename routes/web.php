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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/print', function () {
    return view('print');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('admin/routes', 'HomeController@admin')->middleware('admin');//add
Route::get('adminview', function(){  //add
    return view('adminview');
})->middleware('admin');

Route::get('userview', function(){  //add
    return view('userview');
});

});
    return view('edit');
Route::get('edit', function(){  //add
});
    return view('settime');
Route::get('/settime', function () {

});
    return view('ban');
Route::get('/ban', function () {
});
    return view('nae');
Route::get('/nae', function () {