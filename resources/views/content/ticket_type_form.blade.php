@section('title_web','Ticket Type')	
@section('title_content','Input')
@section('title_icon','fa fa-fw fa-edit')	
@section('title_content_small','Ticket Type')
@section('title_breadcrumb','Input Ticket Type')	
@extends('member')
@section('content')	
<div class="row">
	<div class="col-md-6 col-md-offset-2 form-hs">
		<div class="row">
			<div class="col-md-12">

				<form class="form-horizontal" role="form" method="post" action="{{ isset($data) ? action('TicketTypeController@update') : action('TicketTypeController@store')}}" novalidate="novalidate"> 
					 {!! csrf_field() !!}
					 <input type="hidden" name="id" value="{!! isset($data) ? $data->id : old('id') !!}"> 

					 <div class="form-group"> 
					 <label for="" class="col-sm-4 control-label">Ticket Type :</label> 
								<div class="col-sm-8"> 
						<input type="text" class="form-control" id="" placeholder="Enter Ticket type " name="ticket_type" value="{!! isset($data) ? $data->ticket_type : old('ticket_type')!!}">
						<span class="text-danger">{{ $errors->first('ticket_type')}}</span>
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