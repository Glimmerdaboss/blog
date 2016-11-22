@extends('layouts.master')

@section('title')
Contact page
@endsection

@section('styles')
  <link rel="stylesheet" href="http://localhost:8078/blog/resources/assets/sass/form.scss">
@endsection

@section('content')
@include('includes.info-box')
<form action="" id="contact-form" method="post">

	<div class="input-group">
		<label for="name">Your Name</label>
		<input type="text" name="name" id="name">
	</div>

	<div class="input-group">
		<label for="email">Your E-mail</label>
		<input type="text" name="email" id="email">
	</div>

	<div class="input-group">
		<label for="subject">Subject</label>
		<input type="text" name="subject" id="subject">
	</div>

	<div class="input-group">
		<label for="message">Your message</label>
			<textarea name="message" rows="10"></textarea>
	</div>

<button type="submit" class="btn">Submit message</button>
<input type="hidden" value="{{ Session::token()}}" name="_token"  />
</form>
@endsection
