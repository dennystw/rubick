<html>
	<head>
		<title>Rubick | CRUD Laravel 5.2 dengan Materialize CSS</title>
		<link rel="stylesheet" href="{{ asset('css/materialize.min.css') }}">
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
		@section('css')

		@show
	</head>
	<body>
		@section('header')
			@include('layouts.header')
		@show

		<div class="container">
			@yield('content')
		</div>

		<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
		<script src="{{asset('js/materialize.min.js')}}"></script>
		<script type="text/javascript"> 
		(function($) {
			$(function(){
				$('.button-collapse').sideNav();
			});
		})(jQuery); // end of jQuery name space
		</script>

		<script type="text/javascript" src="{{ asset('js/tinymce/tinymce.min.js') }}"></script>
		<script type="text/javascript">
			tinymce.init({
			            selector : "textarea",
			   plugins : ["advlist autolink lists link image charmap print preview anchor", "searchreplace visualblocks code fullscreen", "insertdatetime media table contextmenu paste"],

			   toolbar : "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",

			   image_advtab: true ,
			});
		</script>
	</body>
</html>