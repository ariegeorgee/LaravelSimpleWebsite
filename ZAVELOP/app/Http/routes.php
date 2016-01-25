<?php


Route::group(['middleware'=>['web']],function(){
	Route::Controller('main','MainController');
	Route::get('/','MainController@getIndex');
	Route::get('Home','MainController@getIndex');
	Route::get('About','MainController@getAbout');
	Route::get('Blog','MainController@getBlog');
	Route::get('Portfolio','MainController@getPortfolio');
	Route::get('Contact','MainController@getContact');
});
