@extends('layout.default')

@section('content')

	<h1>Contact Me</h1>

	<p>
		Use the form below if you'd like to get in touch with me or request my CV.
	</p>

	<form action="" method="post" id="contact-form">

		<input type="text" placeholder="Name" name="name">
		<input type="email" placeholder="Email Address" name="email">
		<textarea placeholder="Message..." name="message"></textarea>
		<button type="submit" class="button">Send Message</button>

	</form>
	
@stop