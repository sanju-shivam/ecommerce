
<div class="hand-tool-active owl-carousel" >
                    <!-- Single Product Start -->
                    @foreach($product_data as $pro)
                    <div class="single-product">
                        <!-- Product Image Start -->
                        <div class="pro-img">
                            <a href="{{ url('single_product/'.$pro->id)}}">
                                <img class="primary-img" src="{{ URL::asset('product_image/'.$pro->product_image)}}" alt="single-product" class="img-fluid mx-auto" style="height: 134px;width: 238px; ">
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
                            <h4><a href="{{ url('single_product/'.$pro->id)}}">{{$pro->product_name}}</a></h4>
                            <p><span class="price"><i class="fa fa-rupee"></i>{{$pro->product_rate}}
                                <!-- </span><del class="prev-price">$32.00</del></p> -->
                            <div class="pro-actions">
                                <div class="actions-secondary">
                                    <a href="wishlist.html" data-toggle="tooltip" title="Add to Wishlist"><i class="fa fa-heart mt-2"></i></a>
                                    
                                    <a class="add-cart" onclick="a(this);" name="{{ $pro->id }}" >Cart It</a>
                                    <!-- <a class="add-cart" href="{{url('add_to_cart/'.$pro->id)}}" data-toggle="tooltip" id="a" name="{{ $pro->id }}" title="Add to Cart">Cart It</a> -->
                                    <!-- <a href="compare.html" data-toggle="tooltip" title="Add to Compare"><i class="fa fa-signal"></i></a> -->


                                 

                                </div>
                            </div>
                        </div>
                        <!-- Product Content End -->
                    </div>     


                    @endforeach                                   
                    <!-- Single Product End -->
                    <a href="{{url('view_all_products_page')}}">
                     <div class="single-product">
                        <!-- Product Content Start -->
                        <div class="pro-content">
                            <button class="btn btn-success mt-5">View More</button>
                        </div>
                        <!-- Product Content End -->
                     </div> 
                    </a>  
                </div>

<script>
                                    
    function a(d){ 
            //event.preventDefault();
        var product_id = d.getAttribute("name");

            $.ajax({
                url: 'cart',
                method:"GET",
                data:{id:product_id},
                success:function(data){
                    console.log(data.id);
                }
            });
    }
</script>