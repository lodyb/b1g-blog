<?php

Route::group(['middleware' => ['web']], function () {
	Route::get('/', function () {
		return 'index';
	});
	Route::get('/login', function () {
		return 'login page';
	});
	Route::get('/year/{year}', function () {
		return 'filter year';
	});
	Route::get('/month/{year}/{month}', function () {
		return 'filter year and month';
	});
	Route::get('/tag/{tags}', function () {
		return 'filter tags';
	});
	Route::get('/user/{user}', function () {
		return 'filter user';
	});
	Route::get('/perma/{year}/{month}/{perma}', function () {
		return 'permalink';
	});
});

Route::group(['prefix' => 'cms', 'middleware' => ['web', 'auth']], function () {
	Route::get('/', function () {
		return 'dashboard';
	});
	Route::get('/post', function () {
		return 'post management';
	});
});
