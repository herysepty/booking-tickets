@section('title_web','User')	
@section('title_content','Input')	
@section('title_icon','fa fa-fw fa-edit')
@section('title_content_small','User')
@section('title_breadcrumb','Input User')	
@extends('member')
@section('content')	
<div class="row">
	<div class="col-md-6 col-md-offset-2 form-hs">
			<div class="row">
				<div class="col-md-12">

					<form class="form-horizontal form-signup" role="form" method="post" action="{{ isset($data) ? action('UserController@update') : action('UserController@store')}}" novalidate="novalidate"> 
						 {!! csrf_field() !!}
						<input type="hidden" name="id" value="{!! isset($data) ? $data->id : old('id') !!}"> 

						 <div class="form-group"> 
						 	<label for="" class="col-sm-4 control-label">First Name :</label> 
					<div class="col-sm-8"> 
							<input type="text" class="form-control" id="" placeholder="Enter first name" name="firstname" value="{!! isset($data) ? $data->firstname : old('firstname')!!}">
							<span class="text-danger">{{ $errors->first('firstname')}}</span>
							</div>
						</div> 
						<div class="form-group"> 
						<label for="" class="col-sm-4 control-label">Last Name :</label> 
					<div class="col-sm-8"> 
							<input type="text" class="form-control" id="" placeholder="Enter lastname" name="lastname" value="{!! isset($data) ? $data->lastname : old('lastname')!!}">
							<span class="text-danger">{{ $errors->first('lastname')}}</span>
							</div>
						</div> 
						<div class="form-group"> 
						<label for="" class="col-sm-4 control-label">Username :</label> 
					<div class="col-sm-8"> 
							<input type="text" class="form-control" id="" placeholder="Enter username" name="username" value="{!! isset($data) ? $data->username : old('username')!!}">
							<span class="text-danger">{{ $errors->first('username')}}</span>
							</div>
						</div> 
						<div class="form-group"> 
						<label for="" class="col-sm-4 control-label">Password :</label> 
					<div class="col-sm-8"> 
							<input type="password" class="form-control" id="" placeholder="Enter password" name="password" value="">
							<span class="text-danger">{{ $errors->first('password')}}</span>
							</div>
						</div> 	
						<div class="form-group"> 
						<label for="" class="col-sm-4 control-label">Re Password :</label> 
					<div class="col-sm-8"> 
							<input type="password" class="form-control" id="" placeholder="Re-Enter password" name="password_confirmation" value="">
							<span class="text-danger">{{ $errors->first('password_confirmation')}}</span>
							</div>
						</div> 	
						<div class="form-group"> 
						<label for="" class="col-sm-4 control-label">Address :</label> 
					<div class="col-sm-8"> 
							<textarea class="form-control" name="address" rows="3" placeholder="Address">{!! isset($data) ? $data->address : old('address')!!}</textarea>
							<span class="text-danger">{{ $errors->first('address')}}</span>
							</div>
						</div> 
						<div class="form-group"> 
						<label for="" class="col-sm-4 control-label">Town :</label> 
					<div class="col-sm-8"> 
							<input type="text" class="form-control" id="" placeholder="Enter town" name="town" value="{!! isset($data) ? $data->town : old('town')!!}">
							<span class="text-danger">{{ $errors->first('town')}}</span>
							</div>
						</div> 
						<div class="form-group"> 
						<label for="" class="col-sm-4 control-label">Country :</label> 
					<div class="col-sm-8"> 
							<input type="text" class="form-control" id="" placeholder="Enter country" name="country" value="{!! isset($data) ? $data->country : old('country')!!}">
							<span class="text-danger">{{ $errors->first('country')}}</span>
							</div>
						</div> 
						<div class="form-group"> 
						<label for="" class="col-sm-4 control-label">Post code :</label> 
					<div class="col-sm-8"> 
							<input type="text" class="form-control" id="" placeholder="Enter post code" name="postcode" value="{!! isset($data) ? $data->postcode : old('postcode')!!}">
							<span class="text-danger">{{ $errors->first('postcode')}}</span>
							</div>
						</div> 
						<div class="form-group"> 
						<label for="" class="col-sm-4 control-label">Email :</label> 
						<div class="col-sm-8"> 
							<input type="text" class="form-control" id="" placeholder="Enter Email" name="email" value="{!! isset($data) ? $data->email : old('email')!!}">
							<span class="text-danger">{{ $errors->first('email')}}</span>
							</div>
						</div> 			
						<div class="form-group">
						<label for="" class="col-sm-4 control-label"></label> 
						<div class="col-sm-8"> 
								<input class="btn btn-primary" type="submit" value="Save" name="">
						</div>
						</div>
					</form>
				</div>
			</div>
	</div>
	</div>

@stop