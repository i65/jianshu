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

Route::get('user', function(){
	return view('user');
});

Route::get('user/{id}', function($id){
	return 'user '.$id;
})->where('id', '[0-9]+');


Route::get('test', function(){
	date_default_timezone_set('Asia/Shanghai');
	$time = strtotime('tomorrow');
	
	$expire = $time-time();
	var_dump(date('Y-m-d H:i:s', time()));
	var_dump(date('Y-m-d H:i:s', $time));
	var_dump(date('Y-m-d H:i:s', $expire));
	
});
