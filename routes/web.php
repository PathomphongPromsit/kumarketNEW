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
    return view('auth.login');
});

Route::get('/print', function () {
    return view('print');
})->middleware('admin');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('admin/routes', 'HomeController@admin')->middleware('admin');//add
Route::get('adminview', function(){  //add
    return view('adminview');
})->middleware('admin');

Route::get('userview', function(){  //add
    return view('userview');
});

Route::get('edit', function(){  //add
    return view('edit');
})->middleware('admin');

Route::get('settime', function(){  //add
    return view('settime');
})->middleware('admin');

Route::get('ban', function(){  //add
    return view('ban');
})->middleware('admin');

Route::get('add', function(){  //add
    return view('add');
})->middleware('admin');