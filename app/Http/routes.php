<?php

Route::group(['middleware' => ['web']], function () {
	Route::get('/', [
		'as' => 'index', 'uses' => 'PostController@index'
	]);
	Route::auth();
	Route::get('/y/{year}', [
		'as' => 'postsbyyear', 'uses' => 'PostController@postsByYear'
	]);
	Route::get('/m/{year}/{month}', [
		'as' => 'postsbymonth', 'uses' => 'PostController@postsByMonth'
	]);
	Route::get('/t/{tags}', [
		'as' => 'postsbytags', 'uses' => 'PostController@postsByTags'
	]);
	Route::get('/u/{user}', [
		'as' => 'postsbyuser', 'uses' => 'PostController@postsByUser'
	]);
	Route::get('/p/{year}/{month}/{perma}', [
		'as' => 'postsbyyear', 'uses' => 'PostController@showPost'
	]);
	Route::get('/top', [
		'as' => 'topposts', 'uses' => 'PostController@top'
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
