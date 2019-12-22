<?php


// Route::get('/', function () { return view('pages.frontend.index'); });
Route::get('/', 'Frontend\HomeController@index');
Route::get('/main', 'Frontend\HomeController@main');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/dashboard/access/users', 'Dashboard\Access\UsersController@index');

// DASHBOARD -- MAIN
Route::get('/dashboard', 'Dashboard\DefaultsController@index');
Route::get('/dashboard/signout', 'Dashboard\DefaultsController@signout');

// DASHBOARD -- GALLERIES
Route::get('/dashboard/galleries', 'Dashboard\GalleriesController@index');
Route::get('/dashboard/galleries/active_image/{id}', 'Dashboard\GalleriesController@active_image');
Route::get('/dashboard/galleries/active_video/{id}', 'Dashboard\GalleriesController@active_video');
Route::get('/dashboard/galleries/nonactive_image/{id}', 'Dashboard\GalleriesController@nonactive_image');
Route::get('/dashboard/galleries/nonactive_video/{id}', 'Dashboard\GalleriesController@nonactive_video');

// DASHBOARD -- IMAGES
Route::get('/dashboard/galleries/uploads/images', 'Dashboard\ImagesController@upload');
Route::post('/dashboard/galleries/uploads/images/process', 'Dashboard\ImagesController@process');

// DASHBOARD -- VIDEOS
Route::get('/dashboard/galleries/uploads/videos', 'Dashboard\VideosController@upload');
Route::post('/dashboard/galleries/uploads/videos/process', 'Dashboard\VideosController@process');

// DASHBOARD -- SETUPS
Route::get('/dashboard/setups', 'Dashboard\SetupsController@index');
Route::post('/dashboard/setups/process', 'Dashboard\SetupsController@process');

// DASHBOARD -- CONTENTS ##### FIX
Route::get('/dashboard/contents/active/{id}', 'Dashboard\ContentsController@active');
Route::get('/dashboard/contents/nonactive/{id}', 'Dashboard\ContentsController@nonactive');
Route::resource('/dashboard/contents', 'Dashboard\\ContentsController');
