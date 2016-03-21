<?php

Route::group(['middleware' => ['web']], function () {
	Route::get('/', [
		'as' => 'index', 'uses' => 'PostController@index'
	]);
	Route::auth();
	Route::get('/year/{year}', [
		'as' => 'postsbyyear', 'uses' => 'PostController@postsByYear'
	]);
	Route::get('/month/{year}/{month}', [
		'as' => 'postsbymonth', 'uses' => 'PostController@postsByMonth'
	]);
	Route::get('/tag/{tags}', [
		'as' => 'postsbytags', 'uses' => 'PostController@postsByTags'
	]);
	Route::get('/user/{user}', [
		'as' => 'postsbyuser', 'uses' => 'PostController@postsByUser'
	]);
	Route::get('/perma/{year}/{month}/{perma}', [
		'as' => 'postsbyyear', 'uses' => 'PostController@showPost'
	]);
	Route::get('/top', [
		'as' => 'topposts', 'uses' => 'PostController@showTop'
	]);
});

Route::group(['prefix' => 'cms', 'middleware' => ['web', 'auth']], function () {
	Route::get('/', [
		'as' => 'cms', 'uses' => 'CMSController@dashboard'
	]);
	Route::get('/post', [
		'as' => 'postmanager', 'uses' => 'CMSController@managePosts'
	]);
});
