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

Route::get('/', 'PagesController@root')->name('root');

Auth::routes();

// Email 认证相关路由
Route::get('email/verify', 'Auth\VerificationController@show')->name('verification.notice');
Route::get('email/verify/{id}/{hash}', 'Auth\VerificationController@verify')->name('verification.verify');
Route::post('email/resend', 'Auth\VerificationController@resend')->name('verification.resend');

//用户信息
Route::resource('users','UsersController',['only'=>['show','update','edit']]);
//话题
Route::resource('topics', 'TopicsController', ['only' => ['index', 'create', 'store', 'update', 'edit', 'destroy']]);
Route::get('topics/{topic}/{slug?}','TopicsController@show')->name('topics.show');



//类别
Route::resource('categories', 'CategoriesController', ['only' => ['show']]);

//图片上传
Route::post('upload_image','TopicsController@uploadImage')->name('topics.upload_image');
Route::resource('replies', 'RepliesController', ['only' => ['store','destroy']]);

//消息
Route::resource('notifications', 'NotificationsController', ['only' => ['index']]);


//无权访问提醒页面
Route::get('permission-denied', 'PagesController@permissionDenied')->name('permission-denied');