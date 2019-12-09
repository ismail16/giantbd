<?php

Route::get('/', 'Frontend\PagesController@index')->name('index');
Route::get('/profiles', 'Frontend\PagesController@profiles')->name('profiles');
Route::get('/sustainable_strategy', 'Frontend\PagesController@sustainable_strategy')->name('sustainable_strategy');
Route::get('/take_a_tour', 'Frontend\PagesController@take_a_tour')->name('take_a_tour');
Route::get('/our_concerns', 'Frontend\PagesController@our_concerns')->name('our_concerns');
Route::get('/giant_future', 'Frontend\PagesController@giant_future')->name('giant_future');
Route::get('/join_us', 'Frontend\PagesController@join_us')->name('join_us');
Route::get('/our_pride_bangladesh', 'Frontend\PagesController@our_pride_bangladesh')->name('our_pride_bangladesh');
Route::get('/contact', 'Frontend\PagesController@contact')->name('contact');
Route::get('/admin-login', 'Frontend\PagesController@login')->name('admin.login');
Route::get('/news_details', 'Frontend\PagesController@news_details')->name('news_details');
Route::get('/single_news/{id}', 'Frontend\PagesController@single_news')->name('single_news');


Auth::routes();

// //======================================== Admin route==================================
Route::group(['as' => 'admin.', 'prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => ['auth', 'admin']], function () {
    Route::get('dashboard', 'DashboardController@index')->name('dashboard');

    Route::resource('news', 'NewsController');
    Route::resource('gallery-image', 'GalleryImageController');
    Route::resource('cv', 'CvController');
});

// //======================================== Author route==================================
Route::group(['as' => 'author.', 'prefix' => 'author', 'namespace' => 'Author', 'middleware' => ['auth', 'author']], function () {
	Route::get('dashboard', 'DashboardController@index')->name('dashboard');
});

