<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;
use App\Category;

class PostController extends Controller
{
    public function getBlogIndex()
    {
    	return view('frontend.blog.index');
    }

     public function getSinglePost($post_id, $end = 'frontend')
    {
    	
    	return view($end . '.blog.single');
    }

    public function getCreatePost()
    {
    	return view('admin.blog.create_post');
    }

    public function postCreatePost(Request $request)
    {
    	$this->validate($request,[
    		 'title' => 'required|max:120|unique:posts',
    		 'author' => 'required|max:80',
    		 'body' => 'required'

    		]);

    	$post = new Post();
    	$post->title = $request['title'];
    	$post->title = $request['author'];
    	$post->title = $request['body'];
    	$post->save();

    	//Attachinging categories

    	return redirect()->route('admin.index')->with(['success' => 'Post successfully created!']);

    }
}
