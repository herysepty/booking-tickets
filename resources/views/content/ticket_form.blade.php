@section('title_web','Ticket')	
@section('title_content','Input')
@section('title_icon','fa fa-fw fa-edit')	
@section('title_content_small','Ticket')
@section('title_breadcrumb','Input Ticket')	
@extends('member')
@section('content')	
<div class="row">
	<div class="col-md-6 col-md-offset-2 form-hs">
		<div class="row">
			<div class="col-md-12">

				<form class="form-horizontal" role="form" method="post" action="{{ isset($data) ? action('TicketController@update') : action('TicketController@store')}}" novalidate="novalidate"> 
					 {!! csrf_field() !!}
					 <input type="hidden" name="id" value="{!! isset($data) ? $data->id : old('id') !!}"> 

					 <div class="form-group"> 
					 <label for="" class="col-sm-4 control-label">Ticket Name :</label> 
					<div class="col-sm-8"> 
						<input type="text" class="form-control" id="" placeholder="Enter Ticket Name" name="ticket_name" value="{!! isset($data) ? $data->ticketName : old('ticket_name')!!}">
						<span class="text-danger">{{ $errors->first('ticket_name')}}</span>
					</div>
					</div> 
					<div class="form-group"> 
                    <label for="" class="col-sm-4 control-label">Ticket Type :</label> 
					<div class="col-sm-8"> 
	                    <select class="form-control" name="id_ticket_type"> 
						<option value="">--Choose--</option>

							@foreach($data2 as $row)
								<option value="{!! $row->id !!}"
								@if(isset($data->ticket_type)) 
									@if($data->ticket_type == $row->id) 
										{{ 'selected'}}
									@endif
								@endif
								>{!! $row->ticket_type !!}</option> 
							@endforeach
						</select>
						<span class="text-danger">{{ $errors->first('id_ticket_type')}}</span>	
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