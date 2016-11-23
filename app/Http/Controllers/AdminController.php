<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Post;

class AdminController extends Controller
{
    public function getIndex()
    {
    	// fetch posts and messages
      $posts = Post::orderBy('created_at', 'desc')->take(4)->get();
    	return view('admin.index', ['posts'=>$posts]);
    }
  }
