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

Route::group(['middleware' => 'auth'], function () {

    Route::get('/', 'HomeController@index')->name('home');
    Route::post('/store-tweet', 'TweetController@store')->name('store.tweet');
    Route::get('/tweets', 'TweetController@index')->name('tweets');

    Route::post('like/{tweet}', 'LikeController@likeTweet');
    Route::post('unlike/{tweet}', 'LikeController@unLikeTweet');

    // check tweet like
    Route::get('check-like/{id}', 'LikeController@checkLike');
});

Auth::routes();
