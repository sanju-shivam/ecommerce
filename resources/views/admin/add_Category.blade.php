@extends('admin.master_of_admin')
@section('title','Add Category')
@section('content')
	@if(session()->has('message'))
		    <div class="alert alert-success">
		        {{ session()->get('message') }}
		    </div>
	@endif
	<form method="POST" action="{{url('add_category_db')}}">
		{{csrf_field()}}
		<table class="table table-responsive">
				<thead>
					<tr>
						<label>CATEGORY NAME</label>
						<input type="text" name="Category" class="form-control" value="">
					</tr><br>

					<tr>
						<input type="submit" value="SUBMIT" class="btn btn-success">
					</tr><br>
			</thead>
		</table>
	</form>
@endsection