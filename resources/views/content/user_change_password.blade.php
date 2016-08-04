@section('title_web','User')	
@section('title_content','Input')	
@section('title_icon','fa fa-fw fa-edit')
@section('title_content_small','User')
@section('title_breadcrumb','Input User')	
@extends('member')
@section('content')	
<div class="row">
	<div class="col-md-4 col-md-offset-4 form-hs">
			<div class="row">
				<div class="col-md-12">
					{!! Session::get('message') !!}
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">

					<form class="form-horizontal form-signup" role="form" method="post" action="{{ action('UserController@changePassword') }}" novalidate="novalidate"> 
						 {!! csrf_field() !!}
						<input type="hidden" name="id" value="{!! Auth::User()->id !!}"> 

						<div class="form-group"> 
							<input type="password" class="form-control" id="" placeholder="Enter Old Password" name="password_old" value="{!! isset($data) ? $data->password : old('password_old')!!}">
							<span class="text-danger">{{ $errors->first('password_old')}}</span>
						</div> 
						<div class="form-group"> 
							<input type="password" class="form-control" id="" placeholder="Eneter password" name="password" value="">
							<span class="text-danger">{{ $errors->first('password')}}</span>
						</div> 	
						<div class="form-group"> 
							<input type="password" class="form-control" id="" placeholder="Enter password confirmation" name="password_confirmation" value="">
							<span class="text-danger">{{ $errors->first('password_confirmation')}}</span>
						</div> 					
						<div class="form-group">
								<input class="btn btn-primary" type="submit" value="Reset" name="">
						</div>
					</form>
				</div>
			</div>
	</div>
	</div>

@stop