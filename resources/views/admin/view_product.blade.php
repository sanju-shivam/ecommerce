@extends('admin.master_of_admin')
@section('title','View Products')
@section('content')
        @if(session()->has('message'))
		    <div class="alert alert-success">
		        {{ session()->get('message') }}
		    </div>
		@endif
	<table class="table table-responsive" style="width: 100%;">
		<tr>
			<thead>
				<th>ID</th>
				<th>PRODUCT NAME</th>
				<th>PRODUCT IMAGE</th>
				<th>PRODUCT RATE</th>
				<th>PRODUCT CATEGORY</th>
				<th>FULL DETAILS</th>
			</thead>
		</tr>
			<?php $i=1; ?>
			@foreach($product as $pro)
		<tr>
			<td> {{$i++}} </td>
			<td> {{$pro->product_name}} </td>
				<td>
					@php
						if(!empty($pro->product_image)) {
					@endphp
				<img src="{{url('product_image/'.$pro->product_image)}}" height="70" width="70">
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
				<td> {{$pro->product_rate}} </td>
				<td> {{$pro->product_category}} </td>
				<td>
					<a href=" {{url('admin_view_more_product_view/'.$pro->id)}} ">
						<button class="btn btn-success" style="color: white;"> View More</button>
					</a>
				</td>
				<td>
					<a href="{{url('ad_edit_product/'.$pro->id)}}">
						<button class="btn" style="background-color: skyblue;color: white;">EDIT</button>
					</a>
				</td>
				<td>
					<a href="{{url('admin_delete_product/'.$pro->id)}}">
						<button class="btn" style="background-color: red;color: white;">DELETE</button>
					</a>
				</td>
		</tr>

			<script type="text/javascript">
				function my() {
					var a = 
					console.log("a");
				}
			</script>
		@endforeach
	</table>
@endsection
