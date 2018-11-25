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

Route::get('pdf','PDFController@pdfview')->middleware('admin');
Route::get('print','PrintController@userview')->middleware('admin');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('admin/routes', 'HomeController@admin')->middleware('admin');//add
Route::get('adminview', function(){  //add
    return view('adminview');
})->middleware('admin');

Route::get('/userview',['as'=>'times','uses'=>'TimeController@userview']);

Route::get('edit', function(){  //add
    return view('edit');
})->middleware('admin');

Route::get('/settime',['as'=>'times','uses'=>'TimeController@index'])->middleware('admin');

Route::get('/ban',['as'=>'ban','uses'=>'BanController@index'])->middleware('admin');
Route::get('/ban/{id}/SetUn',['as'=>'Unban','uses'=>'BanController@SetUnban'])->middleware('admin');
Route::get('/ban/{id}/set',['as'=>'Setban','uses'=>'BanController@Setban'])->middleware('admin');

Route::get('add', function(){  //add
    return view('add');
})->middleware('admin');
