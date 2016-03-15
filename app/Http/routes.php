<?php

Route::group(['middleware' => ['web']], function () {

    Route::get('/', function () {
        return view('auth.login');
    })->middleware('guest');

    // post
    Route::group(['prefix' => 'post'], function () {
        Route::get('/', 'PostController@getAllPosts');  //show all post
        Route::get('/my', 'PostController@getOwnPosts'); //show own post
        Route::post('/create', 'PostController@store');  //insert post
        Route::delete('/{post}', 'PostController@deletePosts'); // delete post

        Route::get('/{id}', 'CommentController@getPostContent'); //view the content of post & Comment
        Route::post('{id}/comment', 'CommentController@store'); // add comment

    });

    Route::auth();

});
