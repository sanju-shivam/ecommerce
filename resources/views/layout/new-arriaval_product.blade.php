
@foreach($new_arrival_product_data->take(8) as $new)
            <div class="single-product ">
                <!-- Product Image Start -->
                <div class="pro-img">
                    <a href="{{ url('single_product/'.$new->product_id)}}">
                        <img class="primary-img" src="{{URL::asset('product_image/'.$new->product_image)}}" style="width: 238px !important; height: 134px !important;" alt="single-product">
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
                    </div>     -->                            
                    <h4><a href="{{ url('single_product/'.$new->product_id)}}">{{$new->product_name}}</a></h4>
                    <p><span class="price"><i class="fa fa-rupee"></i> {{$new->product_rate}}</span></p>
                    <div class="pro-actions">
                        <div class="actions-secondary">
                            <a href="wishlist.html" data-toggle="tooltip" title="Add to Wishlist"><i class="fa fa-heart mt-2"></i></a>
                            <a class="add-cart text-responsive" href="{{url('add_to_cart/'.$new->product_id)}}" data-toggle="tooltip" title="Add to Cart">Cart It</a>
                        </div>
                    </div>
                </div>
                <!-- Product Content End -->
            </div> 
@endforeach   
<div class="single-product">
    <!-- View More Start -->    
    <div class="pro-content mt-5">
        <a href="{{url('view_new_arrival_page')}}">
            <button class="btn btn-success">View More</button>
        </a>
    </div>
    <!-- View More End -->
 </div> 

    