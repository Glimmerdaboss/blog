<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class AdminController extends Controller
{
    public function getIndex()
    {
    	// fetch posts and messages

    	return view('admin.index');
    }
  }