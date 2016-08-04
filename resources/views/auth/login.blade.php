<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>HS </title>
		{!! HTML::style('assets/css/bootstrap.min.css') !!}
		{!! HTML::style('assets/css/style.hs.css') !!}
	</head>
<body style="background:#d9d9d9;">	
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-md-offset-4 container-signin">
					<div class="row">
						<div class="col-md-12">
						<h1 class="text-center"><span class="glyphicon glyphicon-log-in"></span> SIGN IN</h1>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<form class="form-horizontal form-signup" role="form" method="post" action="{{ action('Auth\AuthController@postLogin') }}" novalidate="novalidate"> 
								 {!! csrf_field() !!}
								<div class="form-group"> 
									<input type="text" class="form-control" id="" placeholder="Masukan Username" name="email" value="{!!old('email')!!}">
									<span class="text-danger">{{ $errors->first('email')}}</span>
								</div> 
								<div class="form-group"> 
									<input type="password" class="form-control" id="" placeholder="Masukan password" name="password" value="">
									<span class="text-danger">{{ $errors->first('password')}}</span>
								</div> 				
								<div class="form-group">
										<input class="btn btn-primary" type="submit" value="Sign In" name="btn_signin">
								</div>
							</form>
						</div>
					</div>
					<div class="row" style="margin-top:30px;">
						<div class="col-md-12">
							<a href="login" class="alert-link" style="color:#fff;"><span class="glyphicon glyphicon-lock"></span> Forgot a password</a><br/>
							<a href="register" class="alert-link" style="color:#fff;"><span class="glyphicon glyphicon-user"></span> create an account</a>
						</div>
					</div>
			</div>
			<div class="row footer-signin">
				<div class="col-md-12">
					<small class="text-center">Copyright 2015 for <a href="">Hery's Official Website</a> By <a href="http://twitter.com/herysepty">@herysepty</a> <br/>Thank for Bootstrap and Codeigniter</small>

				</div>
			</div>
		</div>
	</div>
		{!! HTML::script('assets/js/jquery-1.11.1.min.js') !!}
		{!! HTML::script('assets/js/bootstrap.min.js') !!}
 	</body>
</html>