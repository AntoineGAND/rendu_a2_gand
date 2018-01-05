<?php

//Home
Route::get('/','PostsController@index')->name('home');


//Posts
Route::get('/posts/create','PostsController@create')->name('publish');

Route::post('/posts','PostsController@store');

//Route::post('/posts', ['as'=>'file','uses'=>'PostsController@fileUpload']);

Route::get('/posts/{post}', 'PostsController@show');


//Comments
Route::post('/posts/{post}/comments', 'CommentsController@store');


// Register
Route::get('/register', 'RegistrationController@create')->name('register');
Route::post('/register', 'RegistrationController@store');


//Login
Route::get('/login', 'SessionsController@create')->name('login');
Route::post('/login', 'SessionsController@store');


//Logout
Route::get('/logout', 'SessionsController@destroy')->name('logout');


//Like system
Route::get('product/like/{id}', ['as' => 'product.like', 'uses' => 'LikeController@likeProduct']);
Route::get('post/like/{id}', ['as' => 'post.like', 'uses' => 'LikeController@likePost']);


//chat

Route::get('/chat', 'ChatController@index')->name('chat');
//Route::post('/post-message', 'ChatController@postMessage');