@extends('layout.master')
@section('title','Add Special Banners')
@section('content')
	<div class="col-md-12">
		@if(session()->has('message'))
			<div class="alert alert-success">
				<p>{{session()->get('message')}}</p>
			</div>
		@endif
		@if(session()->has('error'))
			<div class="alert alert-danger">
				<p>{{session()->get('error')}}</p>
			</div>
		@endif
		<form method="POST" action=" {{url('special_banner_db')}} " enctype="multipart/form-data">

			{{csrf_field()}}
			<table class="table tbale-responsive">
				<tr>
					<label>Special Banner Name</label>
					<input type="text" name="special_banner_name" placeholder="Special Banner Name" class="form-control">
				</tr>
				<br>
				<tr>
					<label>Special Banner Image</label>
					<div class="custom-file">
						<input type="file" class="form-control" name="special_banner_image"><br>
		            </div>
				</tr>
				<br>
				<tr>
					<label>Special Banner Url</label>
					<input type="text" placeholder="Special Banner Url" name="special_banner_url" class="form-control">
				</tr>
				<br>
				<tr>
					<input type="submit" value="submit" class="btn btn-success">
				</tr>
			</table>
		</form>
	</div>
@endsection