@section('title_web','Detile Booking')	
@section('title_content','Detile')	
@section('title_icon','fa fa-fw fa-table')
@section('title_content_small','Booking')
@section('title_breadcrumb','Detile Booking')	
@extends('member')
@section('content')		
	<div class="row">
		<div class="col-md-12">
			{!! Session::get('message') !!}
		</div>
	</div>
	<div class="row">
		<div class="col-md-6">
		<table style="font-size:18pt;">
			<tr>
				<td width="300px">No Booking </td>
				<td style="color:grey;">: {!! $booking->id !!}</td>
			</tr>
			<tr>
				<td>Booking Reference </td>
				<td style="color:grey;">: {!! $booking->booking_reference !!}</td>
			</tr>
			<tr>
				<td>Name</td>
				<td style="color:grey;">: {!! $user->firstname !!} {{ $user->lastname }}</td>
			</tr>
		</table>
		</div>
		<div class="col-md-6">
		<table style="font-size:22pt;">
			<tr>
				<td>Payment name</td>
				<td style="color:grey;">: {!! $payment->payment_name !!}</td>
			</tr>
		</table>
		</div>
	</div>

	<div class="row" style="margin-top:10%;">
	<h3 class="text-center">Detail Booking</h3>
		<div class="col-md-6">
		<table class="table table-striped">

		    <thead>
		    	<tr>
		           	<th width="10">No</th>
		            <th>Ticket</th>
		      </tr>
		    </thead>
		    <tbody>
		    	<?= $i= ""; ?>
		    	@foreach($tickets as $ticket)
		    		<tr>
		    			<td>{{ ++$i }}</td>
		    			<td>{!! $ticket->ticketName !!}</td>
		    		</tr>
		    	@endforeach
		    	
		    </tbody>
		</table>
		</div>
		<div class="col-md-6">
		<table class="table table-striped">

		    <thead>
		    	<tr>
		           	<th width="10">No</th>
		            <th>seat</th>
		      </tr>
		    </thead>
		    <tbody>
		    	<?= $i= ""; ?>
		    	@foreach($shows as $show)
		    		<tr>
		    			<td>{{ ++$i }}</td>
		    			<td>{!! $show->show_name !!}</td>
		    		</tr>
		    	@endforeach
		    </tbody>
		</table>
		</div>
	</div>
@stop
