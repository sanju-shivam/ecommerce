@extends('layout.master')
@section('content')

<body>
    <!--[if lt IE 8]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <!-- Wrapper Start -->
    <div class="wrapper">
        <!-- Header Area Start -->
        <!-- Header Area End --> 
        
        <!-- Product Thumbnail Start -->
        <div class="main-product-thumbnail pb-60 mt-5">
            <div class="container">
                <div class="row">
                    <!-- Main Thumbnail Image Start -->
                    <div class="col-lg-5">
                        <!-- Thumbnail Large Image start -->
                        <div class="tab-content">
                            <div id="thumb1" class="tab-pane active">
                                <a data-fancybox="images" href="{{asset('product_image/'.$product_detail->product_image)}}"><img src="{{asset('product_image/'.$product_detail->product_image)}}" alt="product-view"></a>
                            </div>
                           <!--  <div id="thumb2" class="tab-pane">
                                <a data-fancybox="images" href="img/products/2.jpg"><img src="img/products/2.jpg" alt="product-view"></a>
                            </div>
                            <div id="thumb3" class="tab-pane">
                                <a data-fancybox="images" href="img/products/3.jpg"><img src="img/products/3.jpg" alt="product-view"></a>
                            </div>
                            <div id="thumb4" class="tab-pane">
                                <a data-fancybox="images" href="img/products/4.jpg"><img src="img/products/4.jpg" alt="product-view"></a>
                            </div> -->
                        </div>
                        <!-- Thumbnail Large Image End -->

                        <!-- Thumbnail Image End -->
                        <!-- <div class="product-thumbnail">
                            <div class="thumb-menu nav">
                                    <a class="active" data-toggle="tab" href="#thumb1"> <img src="img/products/1.jpg" alt="product-thumbnail"></a>
                                    <a data-toggle="tab" href="#thumb2"> <img src="img/products/2.jpg" alt="product-thumbnail"></a>
                                    <a data-toggle="tab" href="#thumb3"> <img src="img/products/3.jpg" alt="product-thumbnail"></a>
                                    <a data-toggle="tab" href="#thumb4"> <img src="img/products/4.jpg" alt="product-thumbnail"></a>
                            </div>
                        </div> -->
                        <!-- Thumbnail image end -->
                    </div>
                    <!-- Main Thumbnail Image End -->
                    <!-- Thumbnail Description Start -->
                    <div class="col-lg-7">
                        <div class="thubnail-desc fix">
                            <h3 class="product-header">{{ $product_detail->product_name }}</h3>
                           
                            <div class="pro-price mb-10">
                                <p><span class="price"><i class="fa fa-rupee" ></i>    {{ $product_detail->product_rate }}</span></p>
                            </div>
                            <div class="pro-ref mb-15">
                                <p><span class="in-stock">IN STOCK</span><span class="sku">{{ $product_detail->product_quantity }}</span></p>
                            </div>
                            <div class="box-quantity">
                                <form action="#">
                                    <input class="number" id="numeric" type="number" min="1" max="{{ $product_detail->product_quantity }}" value="1">
                                    <a class="add-cart" href="cart.html">add to cart</a>
                                </form>
                            </div>
                            <div class="product-link">
                                <ul class="list-inline">
                                    <li><a href="wishlist.html">Add to Wish List</a></li>
                                </ul>
                            </div>
                            <p class="ptb-20">Everything you need for a trip to the gym will fit inside this surprisingly spacious Products Name Here. Stock it with a water bottle, change of clothes, pair of shoes, and even a few beauty products. Fits inside a locker and zips shut for security.</p>
                        </div>
                    </div>
                    <!-- Thumbnail Description End -->
                </div>
                <!-- Row End -->
            </div>
            <!-- Container End -->
        </div>
        <!-- Product Thumbnail End -->
        <!-- Product Thumbnail Description Start -->
        <div class="thumnail-desc pb-60">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <ul class="main-thumb-desc nav ">
                            <li ><a class="active" data-toggle="tab" href="#dtail">Details</a></li>
                        </ul>
                        <!-- Product Thumbnail Tab Content Start -->
                        <div class="tab-content thumb-content border-default">
                            <div id="dtail" class="tab-pane in active">
                                <p>Everything you need for a trip to the gym will fit inside this surprisingly spacious Products Name Here. Stock it with a water bottle, change of clothes, pair of shoes, and even a few beauty products. Fits inside a locker and zips shut for security.</p>
                                <ul class="tab-list-item">
                                    <li> Slip pocket on front.</li>
                                    <li> Contrast piping.</li>
                                    <li> Durable nylon construction.</li>
                                </ul>
                            </div>
                            
                        </div>
                        <!-- Product Thumbnail Tab Content End -->
                    </div>
                </div>
                <!-- Row End -->
            </div>
            <!-- Container End -->
        </div>
        <!-- Product Thumbnail Description End -->
        <!-- Realted Product Start -->
        <div class="related-product pb-30">
            <div class="container">
                <div class="related-box">
                    <div class="group-title">
                        <h2>related product</h2>
                    </div>
                    <!-- Realted Product Activation Start -->                    
                    <div class="new-upsell-pro owl-carousel">
                        <!-- Single Product Start -->                    
                        <div class="single-product">
                            <!-- Product Image Start -->
                            <div class="pro-img">
                                <a href="product.html">
                                    <img class="primary-img" src="img/products/4.jpg" alt="single-product">
                                    <img class="secondary-img" src="img/products/2.jpg" alt="single-product">
                                </a>
                            </div>
                            <!-- Product Image End -->
                            <!-- Product Content Start -->
                            <div class="pro-content">
                                <div class="product-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>                                
                                <h4><a href="product.html">Products Name Here</a></h4>
                                <p><span class="price">$30.00</span><del class="prev-price">$32.00</del></p>
                                <div class="pro-actions">
                                    <div class="actions-secondary">
                                        <a href="wishlist.html" data-toggle="tooltip" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                        <a class="add-cart" href="{{url('add_to_cart/'.$product_detail  ->id)}}" data-toggle="tooltip" title="Add to Cart">Add To Cart</a>
                                        <a href="compare.html" data-toggle="tooltip" title="Add to Compare"><i class="fa fa-signal"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- Product Content End -->
                            <span class="sticker-new">-32%</span>
                        </div>
                        <!-- Single Product End -->  
                    </div>
                    <!-- Realted Product Activation End -->
                </div>
            </div>
        </div>
        <!-- Realted Product End -->
        
       <!-- Brand Logo Start -->
            @include('frontend.brand_slider_of_ecommerce')
        <!-- Brand Logo End -->
    </div>
    <!-- Wrapper End -->

</body>
@endsection


