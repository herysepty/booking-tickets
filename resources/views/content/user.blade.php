@section('title_web','User')	
@section('title_content','Daftar')	
@section('title_icon','fa fa-fw fa-table')
@section('title_content_small','User')
@section('title_breadcrumb','User')	
@extends('member')
@section('content')		
	<div class="row">
		<div class="col-md-12">
			{!! Session::get('message') !!}
		</div>
	</div>
	<div class="row">
		<div class="col-md-5">
			<a href="user/add" class="btn btn-xs btn-primary" style="margin-top:15px;"><span class="glyphicon glyphicon-plus"></span> Add</a>
		</div>
		<div class="col-md-7">
			<form class="navbar-form navbar-right" role="search" method="get" action="{{ action('UserController@find') }}">
	            <div class="form-group">
	            	<input type="text" class="form-control" placeholder="Enter keyword" name="firstname">
	            </div>
	            <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
	         </form>
	     </div>
	</div>
	<div class="row">
		<table class="table table-striped">
		    <thead>
		    	<tr>
		           	<th width="10">No</th>
		            <th>Firts Name</th>
		            <th>Last Name</th>
		            <th>address</th>
		            <th>town</th>
		            <th>country</th>
		            <th>post code</th>
		            <th>email</th>
		            <th class="text-center">Edit</th>
		            <th class="text-center">Delete</th>
		      </tr>
		    </thead>
		    <tbody>
		    	<?php $i=1; ?>
		 	   @foreach($data as $row)
				<tr>
					
					<td>{{ $i++ }}</td>
				 	<td>{{ $row->firstname }}</td>
				 	<td>{{ $row->lastname }}</td>
				 	<td>{{ $row->address }}</td>
				 	<td>{{ $row->town }}</td>
				 	<td>{{ $row->country }}</td>
				 	<td>{{ $row->postcode }}</td>
				 	<td>{{ $row->email }}</td>
				 	
				 	<td class="text-center" width="70px"><a href="{!! URL('user/edit/'.$row->id) !!}"><span class="glyphicon glyphicon-edit"></span></a></td>
				 	<td class="text-center" width="70px"><a href="{!! URL('user/delete/'.$row->id) !!}"><span class="glyphicon glyphicon-trash"></span></a></td>
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
@stop
