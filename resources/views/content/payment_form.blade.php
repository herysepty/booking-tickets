@section('title_web','Payment')	
@section('title_content','Input')
@section('title_icon','fa fa-fw fa-edit')	
@section('title_content_small','Payment')
@section('title_breadcrumb','Input Payment')	
@extends('member')
@section('content')	
<div class="row">
	<div class="col-md-6 col-md-offset-2 form-hs">
		<div class="row">
			<div class="col-md-12">

				<form class="form-horizontal" role="form" method="post" action="{{ isset($data) ? action('PaymentController@update') : action('PaymentController@store')}}" novalidate="novalidate"> 
					 {!! csrf_field() !!}
					 <input type="hidden" name="id" value="{!! isset($data) ? $data->id : old('id') !!}"> 

					 <div class="form-group"> 
					 <label for="" class="col-sm-4 control-label">Invoice number :</label> 
					<div class="col-sm-8"> 
						<input type="text" class="form-control" id="" placeholder="Enter Invoice number" name="invoice_number" value="{!! isset($data) ? $data->invoice_number : old('invoice_number')!!}">
						<span class="text-danger">{{ $errors->first('invoice_number')}}</span>
					</div>
					</div> 
					<div class="form-group"> 
					 <label for="" class="col-sm-4 control-label">Invoice Name :</label> 
					<div class="col-sm-8"> 
						<input type="text" class="form-control" id="" placeholder="Enter Invoice Name" name="payment_name" value="{!! isset($data) ? $data->payment_name : old('payment_name')!!}">
						<span class="text-danger">{{ $errors->first('payment_name')}}</span>
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