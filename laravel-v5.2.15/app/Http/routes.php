<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/

//留言列表
Route::any('index','IndexController@index');
//添加留言
Route::any('add','IndexController@add');
//留言入库
Route::any('doadd','IndexController@doadd');
//留言删除
Route::any('delete','IndexController@delete');
//留言修改
Route::any('update','IndexController@update');
//修改入库
Route::any('nupdate','IndexController@nupdate');
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
