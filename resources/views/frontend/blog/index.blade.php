@extends('layouts.master')

@section('title')
Blog title
@endsection

@section('content')
<article class="blog-post">
	<h3>Post title</h3>
	<span class="subtitle">Post Author | Date</span>
	<p>Post Body</p>
	<a href="#">Read More</a>
	</article>

	<section class="pagination">

	</section>
@endsection
