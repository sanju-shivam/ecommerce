@extends('admin.master_of_admin')
@section('title','Recomended/New Product')
@section('content')
	
	@if(session()->has('message'))
		<div class="alert alert-success">
			{{session()->get('message') }}
		</div>
	@endif


	<table class="table table-responsive">
		<tr>
			<th>S.no</th>
			<th> Product Name</th>
			<th>Product Category</th>
			<th>Product Image</th>
			<th>Product Status</th>
			<th>Action</th>
		</tr>
		<?php $i=1; ?>
		@foreach($all_product as $all)
		<form method="get" action=" {{url('recomended_db')}} ">
			<tr>
				<td>{{$i}}</td>
				<td>
					<input type="hidden" name="product_id" value="{{$all->id}}">
					{{$all->product_name}}</td>
				<td>{{$all->product_category}}</td>
				<td>
						@php
							if(!empty($all->product_image)) {
						@endphp
					<img src="{{url('product_image/'.$all->product_image)}}" height="70" width="70">
				</td>
						@php
						 	}
						 	else{
						@endphp
				<td>
					 	<h3>NO IMAGE FOUND</h3>
				</td>
						@php
							}
						@endphp
					<td>
						<input type="Checkbox" class="form-check-input"  name="recomended" value="0" 					>
						<label>recomended</label><br>
						<input  class="form-check-input" type="Checkbox" name="new" value="1">
						<label>new</label><br>
						<input class="form-check-input" type="Checkbox" name="top_products" value="2">
						<label>top product</label><br>
						<input class="form-check-input" type="Checkbox" name="brand_new" value="3">
						<label>brend new</label>
						<!-- <select name="product_status" class="form-control">
							<option  value="Normal">Normal</option>
							<option value="Recomended">Recomended</option>
							<option value="New">New</option>
							<option value="Top-products" >Top Products</option>
						</select> -->
					</td>
					<td>
						<input type="submit" name="submit" class="btn btn-success" value="Submit Status"> 
					</td>
			</tr>
		</form>
		@endforeach
	</table>
@endsection