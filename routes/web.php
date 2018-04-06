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

Route::get('/', 'Frontend\IndexController@index');
Route::get('/chi-tiet-{slug}.html',['as'=>'home.page.room','uses'=>'Frontend\IndexController@pageRoom']);
Route::get('/hinh-anh.html',['as'=>'home.page.img','uses'=>'Frontend\IndexController@pageImage']);
Route::get('/dich-vu.html',['as'=>'home.page.service','uses'=>'Frontend\IndexController@pageService']);








/*=========================================================================================================================================*/
/*end home*/
Route::get('admin','Backend\HomeController@index')->middleware('admin');

Route::group(['prefix' => 'admin'], function () {
    Route::get('logout',['as'=>'admin.getLogout','uses'=>'Auth\AuthController@getLogout']);
    Route::get('login',['as'=>'admin.getLogin','uses'=>'Auth\AuthController@getLogin']);
    Route::post('login',['as'=>'admin.postLogin','uses'=>'Auth\AuthController@postLogin']);
});



Route::group(['prefix' => 'admin','middleware'=>'admin'], function () {

    Route::group(['prefix' => 'room'], function () {
        Route::get('/',['as'=>'admin.room.getList','uses'=>'Backend\RoomController@getList']);
        Route::get('{slug}.html',['as'=>'admin.room.getList','uses'=>'Backend\RoomController@getList'])->where(['slug'=>'[a-zA-Z\-]+']);
        Route::post('files-{slug}',['as'=>'admin.room.postFile','uses'=>'Backend\RoomController@postFile'])->where(['slug'=>'[a-zA-Z\-]+']);
        Route::post('delete',['as'=>'admin.room.removeFile','uses'=>'Backend\RoomController@removeFile']);
        Route::post('update-{slug}',['as'=>'admin.room.update','uses'=>'Backend\RoomController@update'])->where(['slug'=>'[a-zA-Z\-]+']);

    });

    Route::group(['prefix' => 'imgs'], function () {
        //img
        Route::get('{slug}.html',['as'=>'admin.images.getList','uses'=>'Backend\ImagesController@getList'])->where(['slug'=>'[a-zA-Z\-]+']);
        Route::post('files-{slug}',['as'=>'admin.images.postFile','uses'=>'Backend\ImagesController@postFile'])->where(['slug'=>'[a-zA-Z\-]+']);
        Route::post('delete',['as'=>'admin.images.removeFile','uses'=>'Backend\ImagesController@removeFile']);
    });

    Route::group(['prefix' => 'info'], function () {
        //img
        Route::get('{slug}.html',['as'=>'admin.info.getList','uses'=>'Backend\InfoController@getList'])->where(['slug'=>'[a-zA-Z\-]+']);
        Route::post('update',['as'=>'admin.info.update','uses'=>'Backend\InfoController@update']);
    });
});
