<?php

Route::group(['middleware' => ['web']], function () {

    Route::get('/', function () {
        return view('auth.login');
    })->middleware('guest');

    // post
    Route::group(['prefix' => 'post'], function () {
        // /post/
        Route::get('/', 'PostController@getAllPosts');
        // /post/my
        Route::get('/my', 'PostController@getOwnPosts');
        // /post/{id}
        Route::get('{id}', 'PostController@getPost');
        Route::post('/create', 'PostController@store');

        Route::post('{id}', 'PostController@postEditPost'); // edit
        Route::post('{id}/comment', 'CommentController@store'); // comment
        //Route::delete('{id}/comment/{comment_id}', 'CommentController@delete'); // delete comment
        Route::post('{id}/comment/{comment_id}/delete', 'CommentController@delete'); // delete comment
    });


    Route::auth();

});
