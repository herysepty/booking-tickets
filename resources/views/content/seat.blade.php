@section('title_web','Seat')	
@section('title_content','List')
@section('title_icon','fa fa-fw fa-edit')	
@section('title_content_small','Seat')
@section('title_breadcrumb','List Seat')	
@extends('member')
@section('content')	
<div class="row">
<div class="col-md-8 col-md-offset-2">		
	<div class="row">
		<div class="col-md-12">
			{!! Session::get('message') !!}
		</div>
	</div>
	<div class="row">
		<div class="col-md-5">
			<a href="{!! URL('seat/add') !!}" class="btn btn-xs btn-primary" style="margin-top:15px;"><span class="glyphicon glyphicon-plus"></span> Add</a>
		</div>
	</div>
	<div class="row">
		<table class="table table-striped">
		    <thead>
		    	<tr>
		           	<th width="10">No</th>
		            <th>Seat Name</th>
		            <th class="text-center">Edit</th>
		            <th class="text-center">Delete</th>
		      </tr>
		    </thead>
		    <tbody>
		    	<?php $i=1; ?>
		 	   @foreach($data as $row)
				<tr>
					
					<td>{{ $i++ }}</td>
				 	<td>{{ $row->seat_name }}</td>
				 	
				 	<td class="text-center" width="70px"><a href="{!! URL('seat/edit/'.$row->id) !!}"><span class="glyphicon glyphicon-edit"></span></a></td>
				 	<td class="text-center" width="70px"><a href="{!! URL('seat/delete/'.$row->id) !!}"><span class="glyphicon glyphicon-trash"></span></a></td>
				 </tr>
				 @endforeach
				 @if(count($data) == 0)
				 <tr>
					<td class="text-center" colspan="6"><h4>Data empty</h4></td>
				 </tr>
				 @endif
		    </tbody>
		</table>
		<!-- $data->appends(['sort' => 'votes'])->render() -->
		{!! $data->render() !!}
	</div>
	</div>
	</div>
@stop
