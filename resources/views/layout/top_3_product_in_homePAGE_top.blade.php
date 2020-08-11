<div class="upper-banner banner pb-60">
    <div class="container">
       <div class="row">
         <!-- Single Banner Start -->
            @foreach($top_3_product_data->take(3) as $product)
               <div class="col-sm-4 col-sm-4 col-xs-4 ">
                    <div class="single-banner zoom ">
                        <a href="{{ url('single_product/'.$product->product_id)}}">
                            <img src="{{ URL::asset('product_image/'.$product->product_image)}}" alt="slider-banner" class="img-fluid" style="height: 208px;width: 90%;">
                        </a>
                    </div>
                </div>
            @endforeach
            <!-- Single Banner End -->
        </div>
       <!-- Row End -->
    </div>
    <!-- Container End -->
</div>