@foreach($top_product_data->take(7) as $top_product)

<div class="single-product">
    <div class="pro-img">
        <a href="{{ url('single_product/'.$top_product->product_id)}}"><img class="img-fluid" src="{{url('product_image/'.$top_product->product_image)}}" alt="product-image"></a>
    </div>
    <div class="pro-content">
        <div class="product-rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
        </div>
        <h4><a href="{{ url('single_product/'.$top_product->product_id)}}">{{$top_product->product_name}}</a></h4>
        <p><span class="price">{{$top_product->product_rate}}</span><!-- <del class="prev-price">{{$top_product->product_rate}}</del> --></p>
    </div>
</div>
@endforeach

<div class="single-product">
   
    <div class="pro-content ">
        <a href="{{url('view_top_product_page')}}" >
            <button class="btn btn-success">View More</button>
        </a>
    </div>
</div>