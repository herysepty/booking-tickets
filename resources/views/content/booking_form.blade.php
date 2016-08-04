@section('title_web','Booking')	
@section('title_content','Input')	
@section('title_icon','fa fa-fw fa-edit')
@section('title_content_small','Booking')
@section('title_breadcrumb','Input Booking')	
@extends('member')
@section('content')	
<div class="row">
	<div class="col-md-10 col-md-offset-1 form-hs">
		<div class="row">
			<div class="col-md-12" id="alert-message-booking">
				{!! Session::get('message') !!}
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<form class="form-horizontal form-signup" role="form" method="post" 
					action="{{ action('BookingController@addBooking') }}" novalidate="novalidate"> 
					 {!! csrf_field() !!}
					 <div class="row">
						<div class="col-md-6">
						<div class="form-group"> 

							<label for="" class="col-sm-4 control-label">Id Booking :</label> 
								<div class="col-sm-8"> 
							<input type="text" class="form-control" id="" placeholder="Id Booking" name="id_booking" 
								value="{!! isset($id_booking) ? $id_booking : old('id_booking')!!}">
							<span class="text-danger">{{ $errors->first('id_booking')}}</span>
							</div>
						</div>
						<div class="form-group"> 
							<label for="" class="col-sm-4 control-label">Booking Reference :</label> 
							<div class="col-sm-8"> 
								<input type="text" class="form-control" id="booking_reference" placeholder="Enter Booking reference" name="booking_reference" 
										value="{!! isset($data) ? $data->id : old('booking_reference')!!}">
								<span class="text-danger">{{ $errors->first('booking_reference')}}</span>
							</div>
						</div>	
						<div class="form-group"> 
							<label for="" class="col-sm-4 control-label">Id User :</label> 
							<div class="col-sm-6"> 
								<input type="text" class="form-control" id="id_user" placeholder="Id User" name="id_user" 
										value="{!! old('id_user') !!}">
								<span class="text-danger">{{ $errors->first('id_user')}}</span>
							</div>
							<div class="col-sm-2"> 
								<a href="#search_id_user" class="btn btn-primary btn-md" id="search_id_user" 
								role="button" data-toggle="modal" data-target="#search_id_user_modals">
								<span class="glyphicon glyphicon-search"></span></a>
							</div>
						</div>
						</div>
						<div class="col-md-6">
							<div class="form-group"> 
                    		<label for="" class="col-sm-4 control-label">Payment :</label> 	
							<div class="col-sm-8"> 
			                    <select class="form-control" id="id_payment" name="id_payment"> 
								<option value="">--Choose--</option>

									@foreach($payment as $row)
										<option value="{!! $row->id !!}">{!! $row->payment_name !!}</option> 
									@endforeach
								</select>
								<span class="text-danger">{{ $errors->first('id_payment')}}</span>	
							</div>
						</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label for="" class="col-sm-0"></label> 
								<div class="col-sm-"> 
									<a href="#" class="btn btn-primary btn-xs" id="send_add_ticket" 
									role="button" data-id="" data-toggle="modal" data-target="#add_ticket"><span class="glyphicon glyphicon-plus" style=""></span> Add Ticket</a>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="" class="col-sm-0"></label> 
								<div class="col-sm-"> 
									<a href="" class="btn btn-primary btn-xs" id="send_add_show" 
									role="button" data-id="" data-toggle="modal" data-target="#add_show"><span class="glyphicon glyphicon-plus" style=""></span> Add Show</a>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="col-md-12" id="alert-message-ticket">

							</div>
							<table class="table table-striped">
							    <thead>
							    	<tr>
							           	<th>Id Booking</th>
							            <th>Ticket Name</th>
							            <th class="text-center">Delete</th>
							      </tr>
							    </thead>
							    <tbody id="detail_ticket">


							    </tbody>
							</table>	
						</div>
						<div class="col-md-6">
							<div class="col-md-12" id="alert-message-show">

							</div>
							<table class="table table-striped">
							    <thead>
							    	<tr>
							           	<th>id_booking</th>
							            <th>id_venue</th>
							            <th>id_seat</th>
							 			<th>show_name</th>
							            <th class="text-center">Delete</th>
							      </tr>
							    </thead>
							    <tbody id="detail_show">


							    </tbody>
							</table>	
						</div>
					</div>
					<div class="form-group" style="margin-top:10%;">
						<label for="" class="col-sm-0"></label> 
						<div class="col-sm-12"> 
							<input class="btn btn-primary" type="submit" value="Save" name="Save">
							<input class="btn btn-primary" type="button" id="cencel" value="Cancel" name="cencel">
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<!-- modals -->
 <div class="modal fade" id="add_ticket" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"> 
 	<div class="modal-dialog"> 
 		<form class="" role="form" method="post" 
					action="" novalidate="novalidate"> 
		<form class="form-horizontal" role="form" method="post" action="" novalidate="novalidate"> 
 		<div class="modal-content"> 
 			<div class="modal-header"> 
 				<button type="button" class="close" data-dismiss="modal" aria-hidden="true"> &times; </button> 
 					<h4 class="modal-title" id="myModalLabel">Add Ticket</h4> 
 			</div> 
	 			<div class="modal-body">
					<div class="form-group">
						<div class="col-md-12" id="alert-message-ticket-modal">

						</div> 
						<label>Ticket Name :</label> 
						<input type="text" class="form-control" id="ticket_name" placeholder="Enter Ticket Name" name="ticket_name" value="{!! isset($data) ? $data->ticketName : old('ticket_name')!!}">
						<span class="text-danger">{{ $errors->first('ticket_name')}}</span>
						<label>Ticket Type :</label>
						<select id="id_ticket_type" class="form-control" name="id_ticket_type"> 
						<option value="">--Choose--</option>
							@foreach($tickets_type as $row)
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
					<div class="form-group">
						<input type="hidden" id="token" name="_token" value="{{csrf_token()}}">
						<input type="hidden" name="id_booking" id="id_booking" value="{!! isset($id_booking) ? $id_booking: old('id_booking') !!}">
					</div>
	 			</div>
	 			<div class="modal-footer"> 
	 			<button type="button" class="btn btn-default" data-dismiss="modal">Close </button> 
	 			<button type="button" class="btn btn-primary" id="saveticket" name="saveticket"> Save </button> 
	 			</div>

 		</div><!-- /.modal-content --> 
 		</form> 
 		</form>
 	</div><!-- /.modal -->
 </div>

 <!-- modals show -->
 <div class="modal fade" id="add_show" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"> 
 	<div class="modal-dialog"> 
 		<form class="" role="form" method="post" 
					action="" novalidate="novalidate"> 
		<form class="form-horizontal" role="form" method="post" action="" novalidate="novalidate"> 
 		<div class="modal-content"> 
 			<div class="modal-header"> 
 				<button type="button" class="close" data-dismiss="modal" aria-hidden="true"> &times; </button> 
 					<h4 class="modal-title" id="myModalLabel">Add Show</h4> 
 			</div> 
	 			<div class="modal-body">
	 				<div class="form-group">
	 					<div class="col-md-12" id="alert-message-show-modal">

						</div> 
	 				</div>
					<div class="form-group">
						<div class="col-md-12" id="alert-message-ticket-">

						</div> 
						<label>Show Name :</label> 
						<input type="text" class="form-control" id="show_name" placeholder="Enter Show Name" 
							name="show_name" value="{!! isset($data) ? $data->show_name : old('show_name')!!}">
						<span class="text-danger">{{ $errors->first('show_name')}}</span>
						<label>Venue :</label>
						<select id="id_venue" class="form-control" name="id_venue"> 
						<option value="">--Choose--</option>
							@foreach($venue as $row)
								<option value="{!! $row->id !!}">{!! $row->venue_name !!}</option> 
							@endforeach
						</select>
						<span class="text-danger">{{ $errors->first('id_venue')}}</span>
						<label>Seat :</label>
						<select id="id_seat" class="form-control" name="id_seat"> 
						<option value="">--Choose--</option>
							@foreach($seat as $row)
								<option value="{!! $row->id !!}">{!! $row->seat_name !!}</option> 
							@endforeach
						</select>
						<span class="text-danger">{{ $errors->first('seat_name')}}</span>	
					
					</div> 
					<div class="form-group">
						<input type="hidden" id="token" name="_token" value="{{csrf_token()}}">
						<input type="hidden" name="id_booking" id="id_booking" value="{!! isset($id_booking) ? $id_booking: old('id_booking') !!}">
					</div>
	 			</div>
	 			<div class="modal-footer"> 
	 			<button type="button" class="btn btn-default" data-dismiss="modal">Close </button> 
	 			<button type="button" class="btn btn-primary" id="saveshow" name="saveshow"> Save </button> 
	 			</div>

 		</div><!-- /.modal-content --> 
 		</form> 
 		</form>
 	</div><!-- /.modal -->
 </div>

 <!-- modals -->
 <div class="modal fade" id="search_id_user_modals" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"> 
 	<div class="modal-dialog">  
 		<div class="modal-content"> 
 			<div class="modal-header"> 
 				<button type="button" class="close" data-dismiss="modal" aria-hidden="true"> &times; </button> 
 					<h4 class="modal-title" id="myModalLabel">Users</h4> 
 			</div> 
	 			<div class="modal-body">
					<div class="form-group">
						<div class="col-md-12" id="alert-message2">

						</div> 
						<table class="table table-striped">
						    <thead>
						    	<tr>
						           	<th>No</th>
						            <th>First Name</th>
						            <th>Last Name</th>
						            <th>Address</th>
						            <th>Town</th>
						            <th class="text-center">Choose</th>
						      </tr>
						    </thead>
						    <tbody>
						    	<?php $i=1; ?>
						 	   @foreach($user as $row)
								<tr>
									
									<td>{{ $i++ }}</td>
								 	<td>{{ $row->firstname }}</td>
								 	<td>{{ $row->lastname }}</td>
								 	<td>{{ $row->address }}</td>
								 	<td>{{ $row->town }}</td>
								 	<td class="text-center" width="70px"><input type="radio" data-id="{{ $row->id }}" name="id_user" id="set_id_user" value="{{ $row->id }}"></td>
								 </tr>
								 @endforeach
								 @if(count($user) == 0)
								 <tr>
									<td class="text-center" colspan="6"><h4>Data empty</h4></td>
								 </tr>
								 @endif
						    </tbody>
						</table>
					</div> 
	 			</div> 
	 			<div class="modal-footer"> 
	 			<button type="button" class="btn btn-default" data-dismiss="modal">Tutup </button> 
	 			</div> 

 		</div><!-- /.modal-content --> 
 	</div><!-- /.modal -->
 </div>

@stop

@section('script_js')
<script type="text/javascript">
$(document).ready(function(){
var token = $('#token').val();
var id_booking = $('#id_booking').val();
displayTicket();
displayShow();

	$("#saveticket").click(function(){
		$('#alert-message-ticket').show();
		$('#alert-message-ticket-modal').show();
		var ticket_name = $('#ticket_name').val();
		var id_ticket_type = $('#id_ticket_type').val();
			if((ticket_name == '') || (id_ticket_type == '')){
			$('#alert-message-ticket-modal').html('<div class="text-center alert alert-danger">Field is empty.</div>');
			$('#alert-message-ticket-modal').fadeOut(5000);
		}else{
			$.ajax({
				url : "<?= URL('booking/add-ticket') ?>",
				type : "POST",
				async : false,
				data : {
					'_token' : token,
					'id_booking' : id_booking,
					'ticketName' : ticket_name,
					'id_ticket_type' : id_ticket_type
				},
				success:function(re){
					if(re == 1){
						$("#add_ticket").modal('hide');
						displayTicket();
						$('#ticket_name').val();
						$('#id_ticket_type').val();
						$('#alert-message-ticket').html('<div class="text-center alert alert-success">Data hass ben seved</div>');

						$('#alert-message-ticket').fadeOut(5000);
					}else{
						alert('Failed');
					}
				}
			});
		}
	});

	$('body').delegate('.delete-ticket','click',function(){
		$('#alert-message-ticket').show();
		var token = $('#token').val();
		var id = $(this).data('id');
		$.ajax({
			url : "<?= URL('booking/destroy-ticket') ?>",
			type : "POST",
			async : false,
			data : {
				'_token' : token,
				'id' : id
			},
			success:function(d){
				if(d == 1){
					displayTicket();
					$('#alert-message-ticket').html('<div class="text-center alert alert-success">Delete has been success</div>');
					$('#alert-message-ticket').fadeOut(5000);
				}else{
					alert('Failed');
				}
			}
		});
	});

	$("#saveshow").click(function(){
		$('#alert-message-show-modal').show();
		$('#alert-message-show').show();
		var show_name = $('#show_name').val();
		var id_venue = $('#id_venue').val();
		var id_seat = $('#id_seat').val();


		if((show_name == '') || (id_venue == '') || (id_seat == '') ){
			$('#alert-message-show-modal').html('<div class="text-center alert alert-danger">Field is empty.</div>');
			$('#alert-message-show-modal').fadeOut(5000);
		}else{
			$.ajax({
				url : "<?= URL('booking/add-show') ?>",
				type : "POST",
				async : false,
				data : {
					'_token' : token,
					'id_booking' : id_booking,
					'show_name' : show_name,
					'id_venue' : id_venue,
					'id_seat' : id_seat
				},
				success:function(re){
					if(re == 1){
						$("#add_show").modal('hide');
						displayShow();
						$('#show_name').val("");
						$('#id_venue').val("");
						$('#id_seat').val("");
						$('#alert-message-show').html('<div class="text-center alert alert-success">Data hass ben seved</div>');
						$('#alert-message-show').fadeOut(5000);
					}else{
						alert('Failed');
					}
				}
			});
		}
	});
	$('body').delegate('.delete-show','click',function(){
		$('#alert-message-show').show();
		var show_name = $(this).data('id');
		$.ajax({
			url : "<?= URL('booking/destroy-show') ?>",
			type : "POST",
			async : false,
			data : {
				'_token' : token,
				'show_name' : show_name
			},
			success:function(d){
				if(d == 1){
					displayShow();
					$('#alert-message-show').show().html('<div class="text-center alert alert-success">Delete has been success</div>');
					$('#alert-message-show').fadeOut(5000);
				}else{
					alert('Failed');
				}
			}
		});
	});
	$('body').delegate('#set_id_user','click',function(){
		var id = $(this).data('id');
		//alert(id);
		$("#id_user").val(id);
		$("#search_id_user_modals").modal('hide');

	});
	$("#save").click(function(){
		$('#alert-message-booking').show();
		var booking_reference = $('#booking_reference').val();
		var id_user = $('#id_user').val();
		var id_payment = $('#id_payment').val();

		if((booking_reference == '') || (id_user == '') || (id_payment == '') ){
			$('#alert-message-booking').html('<div class="text-center alert alert-danger">Field is empty.</div>');
			$('#alert-message-booking').fadeOut(5000);
		}else{
			$.ajax({
				url : "<?= URL('booking/add-booking') ?>",
				type : "POST",
				async : false,
				data : {
					'_token' : token,
					'id_booking' : id_booking,
					'booking_reference' : booking_reference,
					'id_user' : id_user,
					'id_payment' : id_payment
				},
				success:function(sb){
					if(sb == 1){
						displayTicket();
						displayShow();
						$('#id_user').val("");
						$('#booking_reference').val("");
						$('#id_payment').val("");
						$('#alert-message-booking').html('<div class="text-center alert alert-success">Data hass ben seved</div>');
						$('#alert-message-booking').fadeOut(5000);
					}else{
						alert('Failed');
					}
				}
			});
		}
	});
	
});

	
function displayTicket(){
	$.ajax({
		url : "<?= URL('booking/add-ticket/'.$id_booking) ?>",
		type : "GET",
		async : false,
		data : {
			'showrecord' : 1
		},
		success:function(s){
			$('#detail_ticket').html(s);
			//alert(s);
		}
	});
};
function displayShow(){
	$.ajax({
		url : "<?= URL('booking/add-show/'.$id_booking) ?>",
		type : "GET",
		async : false,
		data : {
			'showrecord' : 1
		},
		success:function(s){
			$('#detail_show').html(s);
			//alert(s);
		}
	});
};

</script>
@stop