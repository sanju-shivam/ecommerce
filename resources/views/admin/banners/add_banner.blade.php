@extends('admin.master_of_admin')
@section('title','Add Banners')
@section('content')
		@if(session()->has('message'))
		    <div class="alert alert-success">
		        {{ session()->get('message') }}
		    </div>
		@endif
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<form method="POST" action="{{url('banner_db')}}" enctype="multipart/form-data">

                    {{csrf_field()}}
					<table class="table table-responsive">
						<tr>
							<label>BANNER TITLE</label>
							<input type="text" class="form-control" name="title" >
							<br>
						</tr>
						<tr>
							<label>BANNER URL</label>
							<input type="text" name="url" class="form-control">
							<br>
						</tr>
						<tr>
							<label>BANNER IMAGE</label>
							<div class="custom-file">
	                            <input type="file" required class="form-control" name="banner_image"><br>
	                        </div>
						</tr>
						<tr>
							<input type="submit" class="btn btn-success ml-1">
						</tr>
					</table>
				</form>
			</div>
		</div>
	</div>
@endsection
