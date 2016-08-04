<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>HS - Register</title>
		{!! HTML::style('assets/css/bootstrap.min.css') !!}
		{!! HTML::style('assets/css/style.hs.css') !!}
	</head>
<body style="background:#d9d9d9;">	
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-md-offset-4 container-signin">
					<div class="row">
						<div class="col-md-12">
						<h1 class="text-center"><span class="glyphicon glyphicon-log-in"></span> SIGN UP</h1>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<form class="form-horizontal form-signup" role="form" method="post" action="{{ action('Auth\AuthController@postRegister') }}" novalidate="novalidate"> 
								 {!! csrf_field() !!}
								  <div class="form-group"> 
									<input type="text" class="form-control" id="" placeholder="Enter first name" name="firstname" value="{!! isset($data) ? $data->firstname : old('firstname')!!}">
									<span class="text-danger">{{ $errors->first('firstname')}}</span>
								</div> 
								<div class="form-group"> 
									<input type="text" class="form-control" id="" placeholder="Enter lastname" name="lastname" value="{!! isset($data) ? $data->lastname : old('lastname')!!}">
									<span class="text-danger">{{ $errors->first('lastname')}}</span>
								</div> 
								<div class="form-group"> 
									<input type="text" class="form-control" id="" placeholder="Enter username" name="username" value="{!! isset($data) ? $data->username : old('username')!!}">
									<span class="text-danger">{{ $errors->first('username')}}</span>
								</div> 
								<div class="form-group"> 
									<input type="password" class="form-control" id="" placeholder="Enter password" name="password" value="">
									<span class="text-danger">{{ $errors->first('password')}}</span>
								</div> 	
								<div class="form-group"> 
									<input type="password" class="form-control" id="" placeholder="Re-Enter password" name="password_confirmation" value="">
									<span class="text-danger">{{ $errors->first('password_confirmation')}}</span>
								</div> 	
								<div class="form-group">
									<textarea class="form-control" name="address" placeholder="Address">{!! isset($data) ? $data->address : old('address')!!}</textarea> 
									<span class="text-danger">{{ $errors->first('address')}}</span>
								</div> 
								<div class="form-group"> 
									<input type="text" class="form-control" id="" placeholder="Enter town" name="town" value="{!! isset($data) ? $data->town : old('town')!!}">
									<span class="text-danger">{{ $errors->first('town')}}</span>
								</div> 
								<div class="form-group"> 
									<input type="text" class="form-control" id="" placeholder="Enter country" name="country" value="{!! isset($data) ? $data->country : old('country')!!}">
									<span class="text-danger">{{ $errors->first('country')}}</span>
								</div> 
								<div class="form-group"> 
									<input type="text" class="form-control" id="" placeholder="Enter post code" name="postcode" value="{!! isset($data) ? $data->postcode : old('postcode')!!}">
									<span class="text-danger">{{ $errors->first('postcode')}}</span>
								</div> 
								<div class="form-group"> 
									<input type="text" class="form-control" id="" placeholder="Enter Email" name="email" value="{!! isset($data) ? $data->email : old('email')!!}">
									<span class="text-danger">{{ $errors->first('email')}}</span>
								</div>				
								<div class="form-group">
										<input class="btn btn-primary" type="submit" value="Sign Up" name="btn_signin">
								</div>
							</form>
						</div>
					</div>
					<div class="row" style="margin-top:30px;">
						<div class="col-md-12">
							<a href="login" class="alert-link" style="color:#fff;"><span class="glyphicon glyphicon-lock"></span> Forgot a password</a><br/>
							<a href="login" class="alert-link" style="color:#fff;"><span class="glyphicon glyphicon-log-in"></span> Log in</a>
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