@extends('admin.master_of_admin')
@section('title','View Category')

@section('content')
	<center>
		<table class="table ">
			<tr>
				<thead>
					<th>ID</th>
					<th>Category</th>
					<th></th>
				</thead>
			</tr>
				<?php $i=1; ?>
				@foreach($category as $cat)

				<tr>
					<td>{{$i++}}</td>
					<td>{{$cat->Category}}</td>
					<td>
						<a href="{{url('edit_category/'.$cat->id)}}">
							<button class="btn btn-primary">EDIT</button>
						</a>
					</td>
					<td>
						<a href=" {{url('delete_category/'.$cat->id)}} ">
							<button class="btn btn-danger">DELETE</button>
						</a>
					</td>
				</tr>
				@endforeach
		</table>
	</center>
@endsection