<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('asd/{name}', 'TestContr@test');

Route::get('/', 'GpuController@showLessGpus');

Route::get('gpu/{id}', 'GpuController@gpuByName');

Route::get('gpu', 'GpuController@gpuByName');
Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/profile', 'UsersController@UserProfile');

Route::get('comments/{id}', 'CommentController@commentsWithGpu');

Route::post('/createcomment',[
    'uses' => 'CommentController@postCreateComment',
    'as' => 'comment.create'
]);

Route::get('/delete-comment/{comment_id}', [
    'uses' => 'CommentController@getCommentDelete',
    'as' => 'comment.delete',
    'middleware' =>'auth'
]);