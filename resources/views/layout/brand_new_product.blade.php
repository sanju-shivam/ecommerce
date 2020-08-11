@foreach($brand_new_product_data as $brand_new_prod)
<div class="double-pro">
                        <!-- Single Product Start -->
                        <div class="single-product">
                            <div class="pro-img">
                                <a href="{{ url('single_product/'.$brand_new_prod->product_id)}} ">
                                    <img class="img" src="{{ URL::asset('product_image/'.$brand_new_prod->product_image)}}" alt="product-image">
                                </a>
                            </div>
                            <div class="pro-content">
                                <!-- <div class="product-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div> -->
                                <h4><a href="{{ url('single_product/'.$brand_new_prod->id)}} ">{{ $brand_new_prod->product_name }}</a></h4>
                                <p><span class="price">{{ $brand_new_prod->product_rate}}</span>
                                <!-- <del class="prev-price">$32.00</del> -->
                                </p>
                            </div>
                        </div>
                        <!-- Single Product End --> 
</div>
@endforeach