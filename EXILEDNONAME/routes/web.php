<?php


// Route::get('/', function () { return view('pages.frontend.index'); });
Route::get('/', 'Frontend\ContentsController@index');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/dashboard/access/users', 'Dashboard\Access\UsersController@index');

// DASHBOARD -- VIDEOS
Route::get('/dashboard/contents/active/{id}', 'Dashboard\ContentsController@active');
Route::get('/dashboard/contents/nonactive/{id}', 'Dashboard\ContentsController@nonactive');
Route::get('/dashboard/contents/setdefault/{id}', 'Dashboard\ContentsController@setdefault');
Route::get('/dashboard/contents/upload', 'Dashboard\ContentsController@upload');
Route::post('/dashboard/contents/upload/process', 'Dashboard\ContentsController@process');
Route::resource('/dashboard/contents', 'Dashboard\\ContentsController');
