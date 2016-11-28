<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

    Route::get('/', [
    	'as' => 'blog.index', 'uses' => 'PostController@getBlogIndex'
    	
    ]);

   	Route::get('/blog', [
     'as' => 'blog.index' ,'uses' => 'PostController@getBlogIndex'
      
    ]);

    Route::get('/blog/{post_id}&{end}',[
     'as' => 'blog.single', 'uses' => 'PostController@getSinglePost'
      
    ]);

  /* Other routes */
    Route::get('/about', function() {
      return view ('frontend.other.about');
    })->name('about');

    Route::get('/contact', [
      'as' => 'contact', 'uses' => 'ContactMessageController@getContactIndex'
    
    ]);

    Route::group([
      'prefix' => '/admin'
      ], function() {

        Route::get('/', [
      'as' => 'admin.index', 'uses' => 'AdminController@getIndex'
      
    ]);

    Route::get('/blog/posts', [
      'as' => 'admin.blog.indexshowallposts', 'uses' => 'PostController@getPostIndexShowAllPosts'
      
    ]);

    Route::get('/blog/categories', [
      'as' => 'admin.blog.categories', 'uses' => 'CategoryController@getCategoryIndex'
      
    ]);

    
    Route::get('/blog/post/{post_id}&{end}', [
      'as' => 'admin.blog.post','uses' => 'PostController@getSinglePost'
      
    ]);
    
    Route::get('/blog/posts/create', [
      'as' => 'admin.blog.create_post', 'uses' => 'PostController@getCreatePost'
      

    ]);

    Route::post('/blog/post/create', [
      'as' => 'admin.blog.post.create', 'uses' => 'PostController@postCreatePost'
          
    ]);

     Route::get('/blog/post/{post_id}/edit', [
      'as' => 'admin.blog.post.edit', 'uses' => 'PostController@getUpdatePost'
      
    ]);

     Route::post('/blog/post/update', [
      'as' => 'admin.blog.post.update', 'uses' => 'PostController@postUpdatePost'
      
    ]);

     Route::get('/blog/post/{post_id}/delete', [
      'as' => 'admin.blog.post.delete','uses' => 'PostController@getDeletePost'
      
    ]);


  });

