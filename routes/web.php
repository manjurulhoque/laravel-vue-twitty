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

    // profile
    Route::get('users/{username}', 'UserController@profile')->name('profile.user');
    Route::get('users/{username}/edit', 'UserController@edit')->name('profile.edit');
    Route::post('users/{username}/update', 'UserController@update')->name('profile.update');
    Route::get('users/{username}/following', 'UserController@profile')->name('profile');
    Route::get('users/{username}/followers', 'UserController@profile')->name('profile');

    // settings
    Route::get('settings/account', 'ProfileController@account')->name('setting.account');
    Route::post('settings/account', 'ProfileController@accountupdate')->name('setting.account');

    // Follow un-follow
    Route::get('check-follow/{whom}', 'FollowController@checkFollow');
    Route::post('follow/{whom}', 'FollowController@follow');
    Route::post('unfollow/{whom}', 'FollowController@unfollow');

    // who to follow
    Route::get('who-to-follow', 'FollowController@who')->name('who');

    // user search
    Route::get('search/{user}', 'UserController@search');
});

Auth::routes();
