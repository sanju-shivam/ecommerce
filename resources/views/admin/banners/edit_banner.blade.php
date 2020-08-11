@extends('admin.master_of_admin')
@section('title','Edit Banners')
@section('content')
		@if(session()->has('message'))
		    <div class="alert alert-success">
		        {{ session()->get('message') }}
		    </div>
		@endif
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<form method="POST" action="{{url('banner_update')}}" enctype="multipart/form-data">

                    {{csrf_field()}}
					<table class="table table-responsive">
                    @foreach($a as $b)
                    	<input type="hidden" name="id" value="{{$b->id}}">
						<tr>
							<label>BANNER TITLE</label>
							<input type="text" class="form-control" name="title" value="{{$b->title}}" >
							<br>
						</tr>
						<tr>
							<label>BANNER URL</label>
							<input type="text" name="url" class="form-control" value="{{$b->url}}">
							<br>
						</tr>
						<tr>
							<label>BANNER IMAGE</label>
							<div class="custom-file">
	                            <input type="file" class="form-control" name="banner_image"><br>
                                <img src="{{asset('banner_image/'.$b->banner_image)}}" height="100" width="100">
	                        </div>
						</tr>
                        @endforeach
                        <br>
                        <br>
						<tr>
							<input type="submit" class="btn btn-success ml-1">
						</tr>
					</table>
				</form>
			</div>
		</div>
	</div>
@endsection
