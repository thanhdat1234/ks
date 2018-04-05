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

        Route::get('thong-tin-phong-don-{id}',['as'=>'admin.room.getList1','uses'=>'Backend\RoomController@getList']);
        Route::get('thong-tin-phong-doi-{id}',['as'=>'admin.room.getList2','uses'=>'Backend\RoomController@getList']);

        Route::get('add',['as'=>'admin.pdt.getAdd','uses'=>'Backend\ProductController@getAdd']);
        Route::post('add',['as'=>'admin.pdt.postAdd','uses'=>'Backend\ProductController@postAdd']);
        Route::get('edit/{id}',['as'=>'admin.pdt.getEdit','uses'=>'Backend\ProductController@getEdit']);
        Route::post('edit/{id}',['as'=>'admin.pdt.postEdit','uses'=>'Backend\ProductController@postEdit']);
        Route::post('DelImg',['as'=>'admin.pdt.getDelImg','uses'=>'Backend\ProductController@getDelImg']);
        Route::post('UpdateItem',['as'=>'admin.pdt.postUpdateItem','uses'=>'Backend\ProductController@postUpdateItem']);
        Route::post('delItem',['as'=>'admin.pdt.DelItem','uses'=>'Backend\ProductController@DelItem']);
    });

    Route::group(['prefix' => 'imgs'], function () {
        //img
        Route::get('{slug}.html',['as'=>'admin.images.getList','uses'=>'Backend\ImagesController@getList'])->where(['slug'=>'[a-zA-Z\-]+']);
        Route::post('files-{slug}',['as'=>'admin.images.postFile','uses'=>'Backend\ImagesController@postFile'])->where(['slug'=>'[a-zA-Z\-]+']);
        Route::post('delete',['as'=>'admin.images.removeFile','uses'=>'Backend\ImagesController@removeFile']);
    });

    Route::group(['prefix' => 'info'], function () {
        //img
        Route::get('{slug}.html',['as'=>'admin.info.getInfo','uses'=>'Backend\InfoController@getInfo'])->where(['slug'=>'[a-zA-Z\-]+']);
        Route::post('update',['as'=>'admin.info.updateInfo','uses'=>'Backend\InfoController@updateInfo'])->where(['slug'=>'[a-zA-Z\-]+']);
    });
});
