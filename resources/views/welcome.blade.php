@extends('layout.master')

@section('content')
            <!-- Slider Area Start -->

        @include('layout.slider_home_page_top1')

       
        <!-- Slider Area End --> 
        <!-- Banner Start -->
        @include('layout.top_3_product_in_homePAGE_top')                                
        <!-- Banner End -->
        <!-- Best Products Start -->
        <div class="best-seller-product pb-30">
            <div class="container">
                <div class="group-title">
                    <h2>All Products</h2>
                </div>
                <!-- Best Product Activation Start -->
                @include('layout.all_product')
                <!-- Best Product Activation End -->
            </div>
            <!-- Container End -->
        </div>
        <!-- Best Product End -->  
        <!-- Banner Start -->
                                        
        <!-- Banner End -->
        <!-- New Products Start -->
        <div class="new-products pb-60">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-4 order-2">
                        <div class="side-product-list">
                            <div class="group-title">
                                <h2>Top Products</h2>
                            </div>
                            <!-- Deal Pro Activation Start -->
                            <div class="slider-right-content side-product-list-active owl-carousel">
                                <!-- Double Product Start -->
                                <div class="double-pro">
                                    <!-- Single Product Start -->
                                    @include('layout.top_product_home')
                                    <!-- Single Product End -->
                                    <!-- Single Product Start -->
                                    <!-- Single Product End -->
                                </div>
                                <!-- Double Product End -->                  
                            </div>
                            <!-- Deal Pro Activation End -->
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-8  order-lg-2">
                        <!-- New Pro Content End -->
                        <div class="new-pro-content">
                            <div class="pro-tab-title border-line">
                                <!-- Featured Product List Item Start -->
                                <ul class=" nav  product-list product-tab-list mb-30">
                                    <li><a class="active">New Arrivals</a></li>
                                </ul>
                                <!-- Featured Product List Item End -->
                            </div>
                            <div class="tab-content product-tab-content jump">
                                <div id="new-arrival" class="tab-pane active">
                                    <!-- New Products Activation Start -->
                                    <div class="new-pro-active owl-carousel">
                                        <!-- Single Product Start -->
                                            @include('layout.new-arriaval_product')
                                        <!-- Single Product End -->
                                    </div>
                                    <!-- New Products Activation End -->
                                </div>
                                <!-- New Products End -->
                            </div>
                            <!-- Tab-Content End -->
                            @foreach($specialbanner as $banner)
                                <div class="single-banner zoom mt-30 ">
                                    <a href="{{url($banner->special_banner_url)}}">
                                        <img src="{{url::asset('special_banner/'.$banner->special_banner_image)}}" style="height: 240px !important; width: 870px !important;" alt="slider-banner">
                                    </a>
                                </div>
                            @endforeach
                        </div>
                        <!-- New Pro Content End -->                        
                    </div>
                </div>

            </div>
            <!-- Container End -->
        </div>
        <!-- New Products End -->
        <!-- Company Policy Start -->
                @include('frontend.free_delivery_bar')
        <!-- Company Policy End -->   
        <!-- Best Products Start -->
        <div class="best-seller-product pb-50 pb-sm-40">
            <div class="container">
                <div class="group-title">
                    <h2>Brand New Products</h2>
                </div>
                <!-- Best Product Activation Start -->
                <div class="best-seller-pro-active  owl-carousel slider-right-content">
                    
                    <!-- Double Product Start -->
                    @include('layout.brand_new_product')
                    <!-- Double Product End -->
                   
                </div>
                <!-- Best Product Activation End -->
            </div>
            <!-- Container End -->
        </div>
        <!-- Best Product End -->             
        <!-- Blog Page Start -->
        
        <!-- Blog Page End -->
        <!-- Brand Logo Start -->
            @include('frontend.brand_slider_of_ecommerce')
        <!-- Brand Logo End -->
@endsection
