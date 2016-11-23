<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;
use Session;

class PostController extends Controller
{
    public function getBlogIndex()
    {
      $posts = Post::paginate(5);
      foreach ($posts as $post) {
      $post->body = $this->shortenText($post->body, 20);
      }
    	return view('frontend.blog.index', ['posts'=>$posts]);
    }

    public function getPostIndexShowAllPosts()
    {
      $posts = Post::paginate(5);
      return view('admin.blog.indexshowallposts', ['posts' => $posts]);
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
    	 $this->validate($request, [
    		 'title' => 'required|max:120|unique:posts',
    		 'author' => 'required|max:80',
    		 'body' => 'required',

    		]);

    	$post = new Post();
    	$post->title = $request['title'];
    	$post->author = $request['author'];
    	$post->body = $request['body'];
    	$post->save();

    	//Attachinging categories

    	return redirect()->route('admin.index')->with(['success' => 'Post successfully created!']);

    }

    private function shortenText($text, $words_cont)
    {
    if(str_word_count($text, 0) > $words_cont)  {
      $words = str_word_count($text, 2);
      $pos = array_keys($words);
      $text = substr($text, 0, $pos[$words_cont]) . '...';
    }
    return $text;
  }
}
