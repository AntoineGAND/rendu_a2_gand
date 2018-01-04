<?php


Route::get('/','PostsController@index')->name('home');



Route::get('/posts/create','PostsController@create')->name('publish');
Route::post('/posts','PostsController@store');

//Route::post('/posts', ['as'=>'file','uses'=>'PostsController@fileUpload']);

Route::get('/posts/{post}', 'PostsController@show');

Route::post('/posts/{post}/comments', 'CommentsController@store');



Route::get('/register', 'RegistrationController@create')->name('register');
Route::post('/register', 'RegistrationController@store');

Route::get('/login', 'SessionsController@create')->name('login');
Route::post('/login', 'SessionsController@store');

Route::get('/logout', 'SessionsController@destroy')->name('logout');

Route::get('product/like/{id}', ['as' => 'product.like', 'uses' => 'LikeController@likeProduct']);
Route::get('post/like/{id}', ['as' => 'post.like', 'uses' => 'LikeController@likePost']);