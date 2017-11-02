<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/11/2
 * Time: 9:54
 */

/*后台路由*/
Route::group(['prefix' => 'admin'], function(){
    Route::get('/login', function(){
        return 'this is admin login';
    });
});