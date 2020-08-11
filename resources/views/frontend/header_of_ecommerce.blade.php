<header>
            <!-- Header Top Start -->
            <div class="header-top">
                <div class="container">
                    <div class="row">
                        <!-- Header Top left Start -->                        
                        <div class="col-lg-4 col-md-12 d-center">
                            <div class="header-top-left">
                                <img src="{{ URL::asset('assets/frontend/img/icon/call.png')}}" alt="">Call Us : +11 222 3333
                            </div>                        
                        </div>
                        <!-- Header Top left End -->
                        <!-- Search Box Start -->                                        
                        <div class="col-lg-4 col-md-6 ml-auto mr-auto">
                            <div class="search-box-view">
                                <form method="GET" action="">
                                    {{ csrf_field() }}
                                    <input type="text" class="email" placeholder="Search Your Product" id="productname" name="product_name">
                                    <button type="submit" class="submit"></button>
                                    <div class="a productlist" style="z-index: 1000000 !important;visibility: visible;" id="productlist"></div>
                                </form>
                            </div>                                           
                        </div>
                        <!-- Search Box End --> 
                        <!-- Header Top Right Start -->                                       
                        <div class="col-lg-4 col-md-12">
                            <div class="header-top-right">
                                <!-- Header-list-menu End -->
                            </div>
                        </div>
                        <!-- Header Top Right End -->
                    </div>
                </div>
                <!-- Container End -->
            </div>
            <!-- Header Top End -->
            <!-- Header Bottom Start -->
            <div class="header-bottom header-sticky">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-3 col-lg-2 col-sm-5 col-5">
                            <div class="logo">
                                <a href="index.html"><img src="{{ URL::asset('assets/frontend/img/logo/logo.png')}}" alt="logo-image"></a>
                            </div>
                        </div>
                        <!-- Primary Vertical-Menu End -->
                        <!-- Search Box Start -->
                        <div class="col-xl-6 col-lg-7 d-none d-lg-block">
                            <div class="middle-menu pull-right">
                                <nav>
                                    <ul class="middle-menu-list">
                                        <li><a href="{{url('/')}}">home</a>
                                        </li>
                                        <li><a href="{{url('view_all_products_page')}}">All products</a></li>                                        
                                        <li><a href="shop.html">shop<i class="fa fa-angle-down"></i></a>
                                            <!-- Home Version Dropdown Start -->
                                            <ul class="ht-dropdown dropdown-style-two">
                                                <li><a href="">Men<i class="fa fa-angle-down"></i></a>
                                                    <!-- Start Two Step -->
                                                    <ul class="ht-dropdown dropdown-style-two sub-menu">
                                                        <li><a href="shop.html">Clothes<i class="fa fa-angle-down"></i></a>
                                                            <!-- Start Three Step -->
                                                            <ul class="ht-dropdown dropdown-style-two sub-menu">
                                                                <li><a href="shop.html">Jeans</a></li>
                                                                <li><a href="shop.html">Shirt</a></li>
                                                                <li><a href="shop.html">Formals</a></li>
                                                            </ul>
                                                        </li>
                                                        <li><a href="shop.html">Shoes</a></li>
                                                        <li><a href="shop.html">Watch</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="product.html">Women<i class="fa fa-angle-down"></i></a></li>
                                                <li><a href="compare.html">Kids</a></li>
                                                <li><a href="cart.html">Electronics</a></li>
                                                <li><a href="checkout.html">Mobiles</a></li>
                                                <li><a href="wishlist.html">HandLoom Products</a></li>
                                            </ul>
                                            <!-- Home Version Dropdown End -->
                                        </li>                                        
                                        <li><a href="{{url('view_new_arrival_page')}}">New Arrivals</a>
                                        </li>

                                        <li><a href="{{url('Contact_Us')}}">Contact Us</a></li>                                        
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <!-- Search Box End -->
                        <!-- Cartt Box Start -->
                        <div class="col-lg-3 col-sm-7 col-7">
                            <div class="cart-box text-right">
                                <ul>
                                    <li><a href="#"><i class="fa fa-cog"></i></a>
                                        <ul class="ht-dropdown">
                                             @if(empty(session()->get('email')))
                                            <li><a href="{{url('login_view')}}">Login</a></li>
                                            <li><a href="{{url('register_view')}}">Register</a></li>
                                            @endif
                                            @if(session()->get('email'))
                                             <li><a href="account.html">Account</a></li>
                                             <li><a href="{{url('ecommerce_logout/'.$user_id)}}">Logout</a></li>
                                             @endif                                   
                                        </ul>
                                    </li>                                    
                                    <!-- <li><a href="wishlist.html"><i class="fa fa-heart-o"></i></a></li> -->
                                    <li><a href="#"><i class="fa fa-shopping-basket"></i><span class="cart-counter">{{$session_cart_count}}</span></a>
                                        <ul class="ht-dropdown main-cart-box">
                                            <li>
                                                <!-- Cart Box Start -->
                                                    @include('layout.carts_products')
                                                <!-- Cart Box End -->
                                                
                
                                                <!-- Cart Footer Inner Start -->
                                                <div class="cart-footer fix">
                                                    <h5>total :<span class="f-right"><i class="fa fa-rupee"></i>{{$cart_amount}}</span></h5>
                                                    <div class="cart-actions">
                                                        <a class="checkout" href="checkout.html">Checkout</a>
                                                    </div>
                                                </div>
                                                <!-- Cart Footer Inner End -->
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- Cartt Box End -->
                        <div class="col-sm-12 d-lg-none">
                            <div class="mobile-menu">
                                <nav>
                                    <ul>
                                        <li><a href="{{url('/')}}">home</a>
                                        </li>
                                        <li><a href="about.html">Latest Deals</a></li>                                        
                                        <li><a href="shop.html">shop</a>
                                        
                                            <!-- Mobile Menu Dropdown Start -->
                                            <ul class="">
                                                <li><a href="">Men</a>
                                                    <!-- Start Two Step -->
                                                    <ul class="ht-dropdown dropdown-style-two sub-menu">
                                                        <li><a href="shop.html">Product Category Name</a>
                                                            <!-- Start Three Step -->
                                                            <ul class="ht-dropdown dropdown-style-two sub-menu">
                                                                <li><a href="shop.html">Product Category Name</a></li>
                                                                <li><a href="shop.html">Product Category Name</a></li>
                                                                <li><a href="shop.html">Product Category Name</a></li>
                                                            </ul>
                                                        </li>
                                                        <li><a href="shop.html">Product Category Name</a></li>
                                                        <li><a href="shop.html">Product Category Name</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="product.html">Women<i class="fa fa-angle-down"></i></a></li>
                                                <li><a href="compare.html">Kids</a></li>
                                                <li><a href="cart.html">Electronics</a></li>
                                                <li><a href="checkout.html">Mobiles</a></li>
                                                <li><a href="wishlist.html">HandLoom Products</a></li>
                                            </ul>
                                            <!-- Mobile Menu Dropdown End -->
                                        </li>
                                        <li><a href="blog.html">Blog</a>
                                            <!-- Mobile Menu Dropdown Start -->
                                            <ul>
                                                <li><a href="blog-details.html">Blog Details Page</a></li>
                                            </ul>
                                            <!-- Mobile Menu Dropdown End -->
                                        </li>
                                        <li><a href="#">pages</a>
                                            <!-- Mobile Menu Dropdown Start -->
                                            <ul>
                                                <li><a href="login.html">login Page</a></li>
                                                <li><a href="register.html">Register Page</a></li>
                                                <li><a href="404.html">404 Page</a></li>
                                            </ul>
                                            <!-- Mobile Menu Dropdown End -->
                                        </li>
                                        <li><a href="about.html">about us</a></li>
                                        <li><a href="contact.html">contact us</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <!-- Mobile Menu  End -->                        
                    </div>
                    <!-- Row End -->
                </div>
                <!-- Container End -->
            </div>
            <!-- Header Bottom End -->
        </header>
<script>
$(document).ready(function(){

 $('#productname').keyup(function(){ 
        var query = $(this).val();
        //alert(query);
        if(query != '')
        {
         var _token = $('input[name="_token"]').val();
         //alert(_token);
         $.ajax({
          url:"fetch",
          method:"POST",
          //data:{query:query, _token:_token},
          success:function(data){
            console.log(data);
            
            $('#productlist').fadeIn();  
            $('#productlist').html(data);
          }
         });
        }
    });
});
// $("#productname").click(function(){
//   $(".a").removeClass("visible");
// });
$("body").click(function() {
   if ($(".productlist").is(":visible")) {
       $(".productlist").hide();
   }
});

 $(document).on('click', 'li', function(){  
        $('#productname').val($(this).text());  
        $('#productlist').fadeOut();  
    });  
// window.onclick = function(event) {
//   if (event.target == productlist) {
//     productlist.style.display = "none";
//   }
// }
</script>