@section('title_web','Seat')	
@section('title_content','Input')
@section('title_icon','fa fa-fw fa-edit')	
@section('title_content_small','Seat')
@section('title_breadcrumb','Input Seat')	
@extends('member')
@section('content')	
<div class="row">
	<div class="col-md-6 col-md-offset-2 form-hs">
		<div class="row">
			<div class="col-md-12">

				<form class="form-horizontal" role="form" method="post" action="{{ isset($data) ? action('SeatController@update') : action('SeatController@store')}}" novalidate="novalidate"> 
					 {!! csrf_field() !!}
					 <input type="hidden" name="id" value="{!! isset($data) ? $data->id : old('id') !!}"> 

					 <div class="form-group"> 
					 <label for="" class="col-sm-4 control-label">Seat :</label> 
					<div class="col-sm-8"> 
						<input type="text" class="form-control" id="" placeholder="Enter Seat Name" name="seat_name" value="{!! isset($data) ? $data->seat_name : old('seat_name')!!}">
						<span class="text-danger">{{ $errors->first('seat_name')}}</span>
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