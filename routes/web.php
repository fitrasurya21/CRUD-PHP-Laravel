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

Route::get('/belajar',function()
{
	$data=[
		['bahasa'=>'PHP'],
		['bahasa'=>'Java'],
		['bahasa'=>'VB'],
		['bahasa'=>'JavaScript']
	];
	return view('belajar/pelajaran',compact('data'));
});

Route::get('/cek',function(){
	return view('belajar');
});

Route::get('/belajar/lagi','BelajarController@index');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('biodata','BiodataController');

Route::post('biodata/pencarian','BiodataController@cari')->name('biodata.cari');
