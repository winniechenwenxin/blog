<?php

Route::group(['middleware' => ['web']], function () {

    Route::get('/', function () {
        return view('auth.login');
    })->middleware('guest');

    // post
    Route::group(['prefix' => 'post'], function () {
        Route::get('/', 'PostController@getAllPosts');  //show all post
        Route::get('/my', 'PostController@getOwnPosts'); //show own post
        Route::get('/add', function () {
            return view('posts.add_posts');
        });                                              //show add new post form

        Route::get('/datatable_easy', 'PostController@getTable');
                                               //show database easy

        Route::get('/datatable_intermediate','PostController@getDeviceList');
        Route::get('/datatable/list','PostController@getDeviceList');

        Route::post('/upload_photos', 'PostController@uploadFiles');   //upload

        Route::post('/create', 'PostController@store');  //insert post
        Route::delete('/{post}', 'PostController@deletePosts'); // delete post

        Route::get('/{id}', 'CommentController@getPostContent'); //view the content of post & Comment
        Route::post('{id}/comment', 'CommentController@store'); // add comment

    });

    Route::group(['prefix'=>'devices'], function(){
        Route::get('/', 'PostController@getDevices');
        Route::get('/data', 'PostController@getDevicesData');
    });

    Route::auth();

});
