@extends('layouts.admin-master')

@section('content')
<div class="container">

<section id="post-admin">
    <a href="">Edit post</a>
    <a href="">Delete post</a>
</section>
<section class="post">
    <h1>{{ $post->title }}</h1>
    <span class="info">{{ $post->author . " | " . $post->created_at }} </span>
    <p>{{$post->body}}</p>
</section>

</div>
@endsection

