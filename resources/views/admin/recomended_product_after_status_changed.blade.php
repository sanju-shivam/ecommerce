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
		@foreach($all_product_with_status as $all)
		<form method="GET" action=" {{url('recomended_db_update')}} ">
			<tr>
				<td>{{$all->product_id}} </td>
				<td>
					<input type="hidden" name="product_id" value="{{$all->product_id}}">
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
						
						<!--Recommended Start  -->
						@if($all->recomended == 4)
							<input type="checkbox" checked="" name="recomended" value="4">
							@else
							<input type="checkbox" name="recomended" value="4">
						@endif
						<!--Recommended End  -->
						<label>recomended</label><br>

						<!--New Start  -->
						@if($all->new == 1)
							<input type="checkbox" checked="" name="new" value="1">
							@else
							<input type="checkbox" name="new" value="1">
						@endif
						<!--New End  -->
						<label>new</label><br>

						<!--top product Start  -->
						@if($all->top_products == 2)
							<input type="checkbox" checked="" name="top_products" value="2">
							@else
							<input type="checkbox" name="top_products" value="2">
						@endif
						<!--top product End  -->
						<label>top product</label><br>

						<!--brend new Start  -->
						@if($all->brand_new == 3)
							<input type="checkbox" checked="" name="brand_new" value="3">
							@else
							<input type="checkbox" name="brand_new" value="3">
						@endif
						<!--brend new End  -->
						<label>brend new</label>
						
					</td>
					<td>
						<input type="submit" name="submit" class="btn btn-success" value="Update Status"> 
					</td>
			</tr>
		</form>
		@endforeach


		@foreach($all_product_without_status as $all_without)
		<form method="GET" action=" {{url('recomended_db_update')}} ">
			<tr>
				<td>{{$all_without->id}} </td>
				<td>
					<input type="hidden" name="product_id" value="{{$all_without->id}}">
					{{$all_without->product_name}}</td>
				<td>{{$all_without->product_category}}</td>
				<td>
						@php
							if(!empty($all_without->product_image)) {
						@endphp
					<img src="{{url('product_image/'.$all_without->product_image)}}" height="70" width="70">
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
						
						<!--Recommended Start  -->
							<input type="checkbox" name="recomended" value="4">
						<!--Recommended End  -->
						<label>recomended</label><br>

						<!--New Start  -->
							<input type="checkbox" name="new" value="1">
						<!--New End  -->
						<label>new</label><br>

						<!--top product Start  -->
							<input type="checkbox" name="top_products" value="2">
						<!--top product End  -->
						<label>top product</label><br>

						<!--brend new Start  -->
							<input type="checkbox" name="brand_new" value="3">
						<!--brend new End  -->
						<label>brend new</label>
						
					</td>
					<td>
						<input type="submit" name="submit" class="btn btn-success" value="Update Status"> 
					</td>
			</tr>
		</form>
		@endforeach
		
	</table>
@endsection