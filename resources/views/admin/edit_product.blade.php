@extends('admin.master_of_admin')
@section('title','Edit Product')
	@section ('content')
		@if(session()->has('message'))
		    <div class="alert alert-success">
		        {{ session()->get('message') }}
		    </div>
		@endif
	<form enctype="multipart/form-data" method="POST" action="{{url('admin_update_products')}}">
			{{csrf_field()}}
			<table class="table table-responsive">
				<thead>
                <tr>
                    <input type="hidden" name="proid" value="{{$editproduct->id}}">
                </tr>
					<tr>
						<label>PRODUCT NAME</label>
						<input type="text" name="product_name" value="{{$editproduct->product_name}}" class="form-control">
					</tr><br>
					<tr>
						<label>PRODUCT RATE</label>
						<input type="text" value="{{$editproduct->product_rate}}" name="product_rate" class="form-control">
					</tr><br>
					<tr>
						<label>PRODUCT CATEGORY</label><br>
						<select class="form-control" name="product_category">
							@foreach($category as $category_list)
								<option class="form-control" value="{{$category_list->Category}}">
									{{$category_list->Category}}
								</option>
							@endforeach
						</select>
					</tr><br>
					<tr>
						<label>PRODUCT IMAGE</label>
						<div class="custom-file">
							@php
								if(!empty($editproduct->product_image))
									{
							@endphp
                            <input type="file"  class="form-control" name="product_image">
                            <input type="hidden" name="image_name_noedit" value="{{$editproduct->product_image}}">
                            <img src="{{asset('product_image/'.$editproduct->product_image)}}" height="70" width="70" class="mb-4">
                            @php
	                     	   }
	                     	   else
	                     	   	{
	                        @endphp
	                        <h3>THERE IS NO IMAGE</h3>
	                         <input type="file"  class="form-control" name="product_image">
	                        <br>
	                         @php
	                     	   }
	                        @endphp
                        </div>
					</tr><br>
					<tr>
						<label>PRODUCT QUANTITY</label>
						<input type="text" value="{{$editproduct->product_quantity}}" name="product_quantity" class="form-control">
					</tr><br>
					<tr>
						<input type="submit" value="SUBMIT" class="btn btn-success">
					</tr><br>
				</thead>
			</table>
		</form>
	@endsection
