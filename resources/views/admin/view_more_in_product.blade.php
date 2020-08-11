@extends('admin.master_of_admin')
@section('title','View Category')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-4"></div>
		<div class="col-md-4">
			<table class="table table-responsive">
					<tr>
						@php
							if(!empty($product->product_image)){
						@endphp
						<th>
							<img src="{{url('product_image/'.$product->product_image)}}" height="200" width="200" style="border-radius: 50%">
						</th>
						@php
							}
							else{
						@endphp
						<th>
							<h3>THERE IS NO IMAGE</h3>
						</th>
						@php
							}
						@endphp
					</tr>

					<tr>
						<th>NAME:</th>
						<td>{{$product->product_name}}</td>
					</tr>
					<br>
					<tr>
						<th>PRODUCT RATE:</th>
						<td>{{$product->product_rate}}</td>
					</tr>
					<br>
					<tr>
						<th>PRODUCT CATEGORY:</th>
						<td>{{$product->product_category}}</td>
					</tr>
					<br>
					<tr>
						<th>PRODUCT QUANTITY:</th>
						<td>{{$product->product_quantity}}</td>
					</tr>
					<br>
					<tr>
						<th>
							
						</th>
						<th>
							
						</th>
					</tr>

			</table>
		</div>
		<div class="col-md-4"></div>
	</div>
	
</div>
		
	
@endsection