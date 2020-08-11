@extends('admin.master_of_admin')
@section('title','View Banners')
@section('content')
        @if(session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif

	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<table class="table">
                   <tr>
                        <thead>
                            <th>Sr.No</th>
                            <th>Banner Title</th>
                            <th>Banner Url</th>
                            <th>Banner Image</th>
                            <th>Action</th>
                        </thead>
                   </tr>
                   <?php $i=1; ?>
                   @foreach($banr as $bnr)
                   <tr>
                        <tbody>
                            <td>{{$i++}}</td>
                            <td>{{$bnr->title}}</td>
                            <td>{{$bnr->url}}</td>
                            @php
                                if(!empty($bnr->banner_image)){
                            @endphp
                            <td>
                                <img src="{{url('banner_image/'.$bnr->banner_image)}}" alt="{{$bnr->banner_image}}" height="100" width="100">
                            </td>
                            @php
                                }
                                else
                                {
                            @endphp
                            <td>
                                <h4>NO IMAGE FOUND</h4>
                            </td>
                            @php
                                }
                            @endphp
                            <td>
                                <a href="{{url('admin_edit_banner/'.$bnr->id)}}">
                                    <button class="btn btn-facebook">EDIT</button>
                                </a>
                                <a href="{{url('delete_banner/'.$bnr->id)}}">
                                    <button class="btn btn-danger">DELETE</button>
                                </a>

                                @php
                                  if(!empty($bnr->banner_image)){
                                @endphp
                                <a href="">
                                    <button class="btn btn-primary">View Image</button>
                                </a>
                                @php
                                  }
                                 @endphp

                            </td>
                        </tbody>
                   </tr>
                   @endforeach
                </table>
			</div>
		</div>
	</div>
@endsection
