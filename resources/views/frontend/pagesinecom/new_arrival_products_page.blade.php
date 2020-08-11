@extends('layout.master')
@section('content')
	<div class="container" >
		<div class="row">
				@foreach($new_arrival_product_data as $pro)
					<div class="col-md-4 mx-auto" >
						<div class="single-product">
	                        <!-- Product Image Start -->
	                        <div class="pro-img " style="margin-left: 0%" >
	                            <a href="{{ url('single_product/'.$pro->product_id)}}">
	                                <img class="primary-img" src="{{ URL::asset('product_image/'.$pro->product_image)}}" alt="single-product" class="img-fluid mx-auto" style="height: 80%;width: 100%; ">
	                            </a>
	                        </div>
	                        <!-- Product Image End -->
	                        <!-- Product Content Start -->
	                        <div class="pro-content">
	                            <!-- <div class="product-rating">
	                                <i class="fa fa-star"></i>
	                                <i class="fa fa-star"></i>
	                                <i class="fa fa-star"></i>
	                                <i class="fa fa-star"></i>
	                                <i class="fa fa-star"></i>
	                            </div>    -->                             
	                            <h4><a href="{{ url('single_product/'.$pro->product_id)}}">{{$pro->product_name}}</a></h4>
	                            <p><span class="price"><i class="fa fa-rupee"></i>{{$pro->product_rate}}
	                                <!-- </span><del class="prev-price">$32.00</del></p> -->
	                            <div class="pro-actions">
	                                <div class="actions-secondary">
	                                    <a href="wishlist.html" data-toggle="tooltip" title="Add to Wishlist"><i class="fa fa-heart mt-2"></i></a>
	                                    <a class="add-cart"  href="{{url('add_to_cart/'.$pro->product_id)}}" data-toggle="tooltip" title="Add to Cart">Cart It</a>
	                                    <!-- <a href="compare.html" data-toggle="tooltip" title="Add to Compare"><i class="fa fa-signal"></i></a> -->
	                                </div>
	                            </div>
	                        </div>
	                        <!-- Product Content End -->
	                    </div>
	                </div>
				@endforeach
		</div>
	</div>
@endsection