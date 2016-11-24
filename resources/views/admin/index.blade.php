@extends('layouts.admin-master')

@section('styles')
<link rel="stylesheet" href="http://localhost:8079/blog/public/assets/css/modal.css">
@endsection

@section('content')

		<div class="container">
			@include('includes.info-box')

			<!-- *******************
			 POST CARD
			 ******************* -->

			<div class="card">
				<header>
					<nav>
						<ul>
							<li><a href="{{ route('admin.blog.create_post') }}" title="" class="btn">New post</a></li>
							<li><a href="{{ route('admin.blog.indexshowallposts') }}" title="" class="btn">Show all posts</a></li>
						</ul>
					</nav>
				</header>

				<section>
					<ul>
						@if(count($posts) == 0)
						<!-- If no posts -->
						<li>No posts</li>
						@else
						<!-- If posts -->
						@foreach($posts as $post)
						<li>
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
						</li>
						@endforeach
						@endif
					</ul>
				</section>
			</div>

			<!-- *******************
			 MESSAGE CARD
			 ******************* -->

			 <div class="card">
				<header>
					<nav>
						<ul>
							<li><a href="" title="" class="btn">Show all messages</a></li>
						</ul>
					</nav>
				</header>

				<section>
					<ul>
						<!-- If no messages -->
						<li>No messages</li>

						<!-- If messages -->
						<li>
							<article data-message="body" data-id="ID">
								<div class="message-info">
									<h3>Message subject</h3>
									<span class="info">Sender.... | Date</span>
								</div>
								<div class="edit">
									<nav>
										<ul>
											<li><a href="">View</a></li>
											<li><a href="" class="danger">Delete</a></li>
										</ul>
									</nav>
								</div>
							</article>
						</li>
					</ul>
				</section>
			</div>
		</div>

		<div class="modal" id="contact-message-info" >
			<button type="" class="btn" id="modal-close">Close</button>
		</div>

@endsection

@section('scripts')
	<script type="text/javascript">
		var token = "{{ Session::token() }}";
	</script>
	<script type="text/javascript" src="http://localhost:8079/blog/public/assets/js/modal.js"></script>
	<script type="text/javascript" src="http://localhost:8079/blog/public/assets/js/contact_messages.js"></script>
@endsection
