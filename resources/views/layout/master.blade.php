<!doctype html>
<html class="no-js" lang="en-US">
    
    @include('frontend.link_for_ecommerce_of_head_tag')

<body>
    <script type="text/javascript" src="{{ URL::asset('assets/frontend/js/jquery-2.2.4.min.js') }}"></script>
    <!--[if lt IE 8]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <!-- Wrapper Start -->
    <div class="wrapper homepage">
        <!-- Header Area Start -->
        @include('frontend.header_of_ecommerce')
        <!-- Header Area End -->
        @yield('content')

        <!-- Footer Start -->
            @include('frontend.footer_of_ecommerce')
        <!-- Footer End -->
    </div>
    <!-- Wrapper End -->

    <!-- Script tag -->
    @include('frontend.js_links_ecommerrce')
    <!-- Script Tag End -->
</body>


       

    

</html>

