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


Route::post('/signUp', [
	'uses' => 'UsersController@postSignUp',
	'as' => 'signup' ]);


Route::post('/signIn', [
	'uses' => 'UsersController@postSignIn',
	'as' => 'signin' ]);

//Route::get('dashboard', function(){
///	Auth::logout();
//	return view('dashboard');
//})->middleware('auth');


Route::get('/dashboard', [
    'uses' => 'PostController@getDashboard',
    'as' => 'dashboard',
    'middleware' => 'auth'
]);

Route::post('/createpost', function(){
	Auth::logout();
	return view('dashboard');
})->middleware('auth');

  
Route::get('/logout', [
    'uses' => 'UsersController@getLogout',
    'as' => 'logout'
]);
Route::get('/account', [
    'uses' => 'UsersController@getAccount',
    'as' => 'account'
]);
Route::post('/upateaccount', [
    'uses' => 'UsersController@postSaveAccount',
    'as' => 'account.save'
]);
Route::get('/userimage/{filename}', [
    'uses' => 'UsersController@getUserImage',
    'as' => 'account.image'
]);

Route::post('/createpost', [
    'uses' => 'PostController@postCreatePost',
    'as' => 'post.create',
    'middleware' => 'auth'
]);
Route::get('/delete-post/{post_id}', [
    'uses' => 'PostController@getDeletePost',
    'as' => 'post.delete',
    'middleware' => 'auth'
]);
Route::post('/edit', [
    'uses' => 'PostController@postEditPost',
    'as' => 'edit'
]);
Route::post('/like', [
    'uses' => 'PostController@postLikePost',
    'as' => 'like'
]);

