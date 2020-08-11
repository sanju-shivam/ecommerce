@extends('admin.master_of_admin')
@section('title','Add Products')
	@section ('content')
		@if(session()->has('message'))
		    <div class="alert alert-success">
		        {{ session()->get('message') }}
		    </div>
		@endif
		<form enctype="multipart/form-data" method="POST" action="{{url('admin_add_products_view')}}">
			{{csrf_field()}}
			<table class="table table-responsive">
				<thead>
					<tr>
						<label>PRODUCT NAME</label>
						<input type="text" name="product_name" class="form-control">
					</tr><br>
					<tr>
						<label>PRODUCT RATE</label>
						<input type="text" name="product_rate" class="form-control">
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
						<label>PRODUCT SUBCATEGORY</label><br>
						<select class="form-control" name="subcategory_id">
							@foreach($subcat as $subcategory_list)
								<option class="form-control" value="{{$subcategory_list->id}}">
									{{$subcategory_list->sub_category}}
								</option>
							@endforeach
						</select>
					</tr><br>
					<tr>
						<label>PRODUCT SUPER SUBCATEGORY</label><br>
						<select class="form-control" name="super_subcategory_id">
							@foreach($subcat as $super_sub_category_list)
								<option class="form-control" value="{{$super_sub_category_list->id}}">
									{{$super_sub_category_list->sub_category_2}}
								</option>
							@endforeach
						</select>
					</tr><br>
					<tr>
						<label>PRODUCT IMAGE</label>
						<div class="custom-file">
                            <input type="file" class="form-control" name="product_image"><br>

                        </div>
					</tr><br>
					<tr>
						<label>PRODUCT QUANTITY</label>
						<input type="text" name="product_quantity" class="form-control">
					</tr><br>
					<tr>
						<label>PRODUCT STATUS</label><br>&nbsp;&nbsp;&nbsp;&nbsp;
							<input type="Checkbox" class="form-check-input"  name="recomended" value="4">
							<label>recomended</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<input  class="form-check-input" type="Checkbox" name="new" value="1">
							<label>new</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 	
							<input class="form-check-input" type="Checkbox" name="top_products" value="2">
							<label>top product</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<input class="form-check-input" type="Checkbox" name="brand_new" value="3">
							<label>brend new</label>
					</tr><br>
					<tr>
						<input type="submit" value="SUBMIT" class="btn btn-success">
					</tr><br>
				</thead>
			</table>
		</form>
	@endsection
