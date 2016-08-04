<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="icon" href="{{ URL('assets/img/favicon.png')}}">
		<title> @herysepty - @yield('title_web')</title>

		{!! HTML::style('assets/css/bootstrap.min.css') !!}
		{!! HTML::style('assets/css/style.hs.css') !!}
	</head>
<body>	
		
	<div class="container container-wrapper">
		@include('layout.header')
		<div class="row">
			<div class="col-md-12 content-hs">
				@yield('content')
			</div>
		</div>
	</div>
		@include('layout.footer')

		{!! HTML::script('assets/js/jquery-1.11.1.min.js') !!}
		{!! HTML::script('assets/js/bootstrap.min.js') !!}
		<!-- {!! HTML::script('assets/js/jquery.validate.hs.min.js') !!}
		{!! HTML::script('assets/js/hs.control.jquery.js') !!} -->

		@yield('script')
 	</body>
</html>