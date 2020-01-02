<?php
Route::get('/', 'Frontend\HomeController@index');
Route::get('/main', 'Frontend\HomeController@main');

Route::get('/video-1', 'Frontend\HomeController@video_1');
Route::get('/video-2', 'Frontend\HomeController@video_2');
Route::get('/video-3', 'Frontend\HomeController@video_3');

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
Route::resource('/dashboard/galleries', 'Dashboard\\GalleriesController');

Route::get('/dashboard/galleries/set_image_1/{id}', 'Dashboard\GalleriesController@set_image_1');
Route::get('/dashboard/galleries/set_image_2/{id}', 'Dashboard\GalleriesController@set_image_2');

Route::get('/dashboard/galleries/set_video_1/{id}', 'Dashboard\GalleriesController@set_video_1');
Route::get('/dashboard/galleries/set_video_2/{id}', 'Dashboard\GalleriesController@set_video_2');
Route::get('/dashboard/galleries/set_video_3/{id}', 'Dashboard\GalleriesController@set_video_3');
Route::get('/dashboard/galleries/set_video_disable/{id}', 'Dashboard\GalleriesController@set_video_disable');

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

// DASHBOARD -- SLIDE 1
Route::get('/dashboard/setups/slide-1', 'Dashboard\Slide1Controller@index');
Route::get('/dashboard/setups/slide-1/upload', 'Dashboard\Slide1Controller@upload');
Route::post('/dashboard/setups/slide-1/upload/process', 'Dashboard\Slide1Controller@process');
Route::get('/dashboard/setups/slide-1/active/{id}', 'Dashboard\Slide1Controller@active');
Route::get('/dashboard/setups/slide-1/nonactive/{id}', 'Dashboard\Slide1Controller@nonactive');
Route::resource('/dashboard/setups/slide-1', 'Dashboard\\Slide1Controller');

// DASHBOARD -- SLIDE 2
Route::get('/dashboard/setups/slide-2', 'Dashboard\Slide2Controller@index');
Route::get('/dashboard/setups/slide-2/upload', 'Dashboard\Slide2Controller@upload');
Route::post('/dashboard/setups/slide-2/upload/process', 'Dashboard\Slide2Controller@process');
Route::get('/dashboard/setups/slide-2/active/{id}', 'Dashboard\Slide2Controller@active');
Route::get('/dashboard/setups/slide-2/nonactive/{id}', 'Dashboard\Slide2Controller@nonactive');
Route::resource('/dashboard/setups/slide-2', 'Dashboard\\Slide2Controller');

// DASHBOARD -- VIDEO 1
Route::get('/dashboard/setups/video-1', 'Dashboard\Video1Controller@index');
Route::get('/dashboard/setups/video-1/upload', 'Dashboard\Video1Controller@upload');
Route::post('/dashboard/setups/video-1/upload/process', 'Dashboard\Video1Controller@process');
Route::get('/dashboard/setups/video-1/active/{id}', 'Dashboard\Video1Controller@active');
Route::get('/dashboard/setups/video-1/nonactive/{id}', 'Dashboard\Video1Controller@nonactive');
Route::resource('/dashboard/setups/video-1', 'Dashboard\\Video1Controller');

// DASHBOARD -- VIDEO 2
Route::get('/dashboard/setups/video-2', 'Dashboard\Video2Controller@index');
Route::get('/dashboard/setups/video-2/upload', 'Dashboard\Video2Controller@upload');
Route::post('/dashboard/setups/video-2/upload/process', 'Dashboard\Video2Controller@process');
Route::get('/dashboard/setups/video-2/active/{id}', 'Dashboard\Video2Controller@active');
Route::get('/dashboard/setups/video-2/nonactive/{id}', 'Dashboard\Video2Controller@nonactive');
Route::resource('/dashboard/setups/video-2', 'Dashboard\\Video2Controller');

// DASHBOARD -- VIDEO 3
Route::get('/dashboard/setups/video-3', 'Dashboard\Video3Controller@index');
Route::get('/dashboard/setups/video-3/upload', 'Dashboard\Video3Controller@upload');
Route::post('/dashboard/setups/video-3/upload/process', 'Dashboard\Video3Controller@process');
Route::get('/dashboard/setups/video-3/active/{id}', 'Dashboard\Video3Controller@active');
Route::get('/dashboard/setups/video-3/nonactive/{id}', 'Dashboard\Video3Controller@nonactive');
Route::resource('/dashboard/setups/video-3', 'Dashboard\\Video3Controller');
