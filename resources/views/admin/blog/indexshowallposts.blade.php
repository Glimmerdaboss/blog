@extends('layouts.admin-master')

@section('styles')
<link rel="stylesheet" href="http://localhost:8079/blog/public/assets/css/form.css">
@endsection

@section('content')
<div class="container">
  	@include('includes.info-box')
    <section id="post-admin">
      <a href="{{ route('admin.blog.create_post') }}" class="btn">New post</a>
    </section>
  <section class="list">

      @if(count($posts) == 0)
      <!-- If no posts -->
      No posts
      @else
      <!-- If posts -->
      @foreach($posts as $post)

        <article>
          <div class="post-info">
            <h3>{{ $post->title }}</h3>
            <span class="info">{{ $post->author . " | " . $post->created_at }}</span>
          </div>
          <div class="edit">
            <nav>
              <ul>
                <li><a href="{{ route('admin.blog.post' , [ 'post_id'=>$post->id, 'end' =>'admin' ]) }}">View Post</a></li>
                <li><a href="{{ route('admin.blog.post.edit',['post_id' =>$post->id]) }}">Edit</a></li>
                <li><a href="{{ route('admin.blog.post.delete',['post_id' =>$post->id]) }}" class="danger">Delete</a></li>
              </ul>
            </nav>
          </div>
        </article>

      @endforeach
      @endif

  </section>
  @if($posts->lastPage()>1)
    <section class="pagination">
        @if($posts->currentPage() !==1)
          <a href="{{ $posts->previousPageUrl() }}"><i class="fa fa-caret-left"></i></a>
        @endif

        @if($posts->currentPage() !== $posts->lastPage())
          <a href="{{ $posts->nextPageUrl() }}"><i class="fa fa-caret-right"></i></a>
        @endif
    </section>
  @endif
</div>
@endsection
