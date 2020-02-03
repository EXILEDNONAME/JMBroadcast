<?php

Route::get('/', 'Frontend\HomeController@index');
Route::get('/main', 'Frontend\HomeController@main');
Route::get('/video-1', 'Frontend\HomeController@video1');
Route::get('/video-2', 'Frontend\HomeController@video2');
Route::get('/video-3', 'Frontend\HomeController@video3');
Route::get('/video-4', 'Frontend\HomeController@video4');

Auth::routes();

// DASHBOARD - MAIN
Route::get('/dashboard', 'Backend\IndexController@index');
Route::get('/dashboard/logout', 'Backend\IndexController@logout');

// BROADCAST - SLIDE 1
Route::resource('/dashboard/broadcast/slide-1', 'Backend\\Broadcast\\Slide1Controller');
Route::get('/dashboard/broadcast/slide-1/enable/{id}', 'Backend\Broadcast\Slide1Controller@enable');
Route::get('/dashboard/broadcast/slide-1/disable/{id}', 'Backend\Broadcast\Slide1Controller@disable');

// BROADCAST - SLIDE 2
Route::resource('/dashboard/broadcast/slide-2', 'Backend\\Broadcast\\Slide2Controller');
Route::get('/dashboard/broadcast/slide-2/enable/{id}', 'Backend\Broadcast\Slide2Controller@enable');
Route::get('/dashboard/broadcast/slide-2/disable/{id}', 'Backend\Broadcast\Slide2Controller@disable');

// BROADCAST - VIDEO 1
Route::resource('/dashboard/broadcast/video-1', 'Backend\\Broadcast\\Video1Controller');
Route::get('/dashboard/broadcast/video-1/enable/{id}', 'Backend\Broadcast\Video1Controller@enable');
Route::get('/dashboard/broadcast/video-1/disable/{id}', 'Backend\Broadcast\Video1Controller@disable');

// BROADCAST - VIDEO 2
Route::resource('/dashboard/broadcast/video-2', 'Backend\\Broadcast\\Video2Controller');
Route::get('/dashboard/broadcast/video-2/enable/{id}', 'Backend\Broadcast\Video2Controller@enable');
Route::get('/dashboard/broadcast/video-2/disable/{id}', 'Backend\Broadcast\Video2Controller@disable');

// BROADCAST - VIDEO 3
Route::resource('/dashboard/broadcast/video-3', 'Backend\\Broadcast\\Video3Controller');
Route::get('/dashboard/broadcast/video-3/enable/{id}', 'Backend\Broadcast\Video3Controller@enable');
Route::get('/dashboard/broadcast/video-3/disable/{id}', 'Backend\Broadcast\Video3Controller@disable');

// BROADCAST - VIDEO 4
Route::resource('/dashboard/broadcast/video-4', 'Backend\\Broadcast\\Video4Controller');
Route::get('/dashboard/broadcast/video-4/enable/{id}', 'Backend\Broadcast\Video4Controller@enable');
Route::get('/dashboard/broadcast/video-4/disable/{id}', 'Backend\Broadcast\Video4Controller@disable');

// BROADCAST - SETUPS
Route::get('/dashboard/broadcast/setups', 'Backend\Broadcast\SetupController@index');
Route::post('/dashboard/broadcast/setups/process', 'Backend\Broadcast\SetupController@process');

// BROADCAST - CONTENTS
Route::resource('/dashboard/broadcast/contents', 'Backend\\Broadcast\\ContentController');
Route::get('/dashboard/broadcast/contents/enable/{id}', 'Backend\Broadcast\ContentController@enable');
Route::get('/dashboard/broadcast/contents/disable/{id}', 'Backend\Broadcast\ContentController@disable');

// ACCESS
Route::get('/dashboard/setting/management/accesses/json','Backend\Setting\Management\AccessController@json');
Route::get('/dashboard/setting/management/accesses/delete/{id}', 'Backend\Setting\Management\AccessController@destroy');
Route::get('/dashboard/setting/management/accesses/enable/{id}', 'Backend\Setting\Management\AccessController@enable');
Route::get('/dashboard/setting/management/accesses/disable/{id}', 'Backend\Setting\Management\AccessController@disable');
Route::resource('/dashboard/setting/management/accesses', 'Backend\\Setting\\Management\\AccessController');
