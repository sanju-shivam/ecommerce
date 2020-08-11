@extends('admin.master_of_admin')
@section('title','Add SubCategory')
@section('content')
<div class="container-fluid">
		@if(session()->has('message'))
		    <div class="alert alert-success">
		        {{ session()->get('message') }}
		    </div>
		@endif
	<div class="row">
		<div class="col-md-12">
			<form action="{{url('/savesub')}}" method="POST">
				{{csrf_field()}}
				<table class="table table-responsive">
					<tr>
						<label>Category</label>
						<br>

						<select class="form-control" name="category_id">
							@foreach($category as $cat)
								<option value="{{$cat->id}}">{{$cat->Category}}</option>
							@endforeach
						</select>
					</tr>
					<br>
					<tr>
						<label>Sub Category</label>
						<br>
						<input class="form-control" type="text" name="sub_category">
					</tr>
					<tr>
						<br>
						<label>Sub Category Under Sub Category</label>
						<br>
						<input type="text" class="form-control" name="sub_category_2" placeholder="Ex:-  Jeans under Clothes">
					</tr>
					<tr><br>
						<input type="submit" class="btn btn-success" value="Submit">
					</tr>
				</table>
			</form>
		</div>
	</div>
</div>
	
		
@endsection