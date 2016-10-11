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



Route::get('gpu/{id}', 'GpuController@gpuByName');

Route::get('gpu', 'GpuController@gpuByName');
Auth::routes();

Route::get('/home', 'HomeController@index');




Route::get('comments/{id}', [
   'uses' => 'CommentController@commentsWithGpu',
    'as' => 'comments'
]);

Route::post('/createcomment',[
    'uses' => 'CommentController@postCreateComment',
    'as' => 'comment.create'
]);

Route::get('/delete-comment/{comment_id}', [
    'uses' => 'CommentController@getCommentDelete',
    'as' => 'comment.delete',
    'middleware' =>'auth'
]);
Route::get('logout', [
    'uses' => 'GpuController@Logout',
    'as' => 'logout'
]);

Route::group(['middleware' => 'web'], function () {

    Route::get('/vip', [
        'uses' => 'AppController@getAuthorPage',
        'as' => 'vip',
        'middleware' => 'roles',
        'roles' => ['Admin', 'Vip', 'Mod']
    ]);
    Route::get('/admin', [
        'uses' => 'AppController@getAdminPage',
        'as' => 'admin',
        'middleware' => 'roles',
        'roles' => ['Admin']
    ]);
    Route::post('/admin/assign-roles', [
        'uses' => 'AppController@postAdminAssignRoles',
        'as' => 'admin.assign',
        'middleware' => 'roles',
        'roles' => ['Admin']
    ]);
    Route::get('/register', [
        'uses' => 'AuthController@getSignUpPage',
        'as' => 'signup'
    ]);
    Route::post('/register', [
        'uses' => 'AuthController@postSignUp',
        'as' => 'signup'
    ]);
    Route::get('/login', [
        'uses' => 'AuthController@getSignInPage',
        'as' => 'signin'
    ]);
    Route::post('/login', [
        'uses' => 'AuthController@postSignIn',
        'as' => 'signin'
    ]);
    Route::get('/logout', [
        'uses' => 'AuthController@getLogout',
        'as' => 'logout'
    ]);
    Route::get('/profile', 'UsersController@UserProfile');
    Route::get('/', 'GpuController@showLessGpus');
    Route::get('/getPDF','PDFController@getPDF');
});
Route::post('profile', 'UsersController@update_avatar');