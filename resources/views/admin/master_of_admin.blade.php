<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Responsive Admin Dashboard Template">
        <meta name="keywords" content="admin,dashboard">
        <meta name="author" content="stacks">
        <!-- The above 6 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        
        <!-- Title -->
        <title>concept - Responsive Admin Dashboard Template</title>

        <!-- Styles -->
        <link href="https://fonts.googleapis.com/css?family=Rubik" rel="stylesheet">
        <link href="../../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="../../assets/plugins/font-awesome/css/all.min.css" rel="stylesheet">
        <link href="../../assets/plugins/icomoon/style.css" rel="stylesheet">
        <link href="../../assets/plugins/switchery/switchery.min.css" rel="stylesheet"> 

      
        <!-- Theme Styles -->
        <link href="../../assets/css/concept.min.css" rel="stylesheet">
        <link href="../../assets/css/custom.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        
        <!-- Page Container -->
        <div class="page-container">
            <!-- Page Sidebar -->
            <div class="page-sidebar">
                <div class="profile-menu">
                    <a href="app-profile.html">
                        <img src="../../assets/images/avatars/avatar1.png" alt="">
                    </a>
                </div>
                <div class="page-sidebar-inner">
                    <div class="page-sidebar-menu">
                        <ul>
                            <li>
                                <a href="#" data-toggle="tooltip" data-placement="right" title="Dashboard"><i class="fas fa-rocket"></i></a>
                            </li>
                            <li>
                                <a href="#" data-toggle="tooltip" data-placement="right" title="News"><i class="fas fa-globe-africa"></i></a>
                            </li>
                            <li>
                                <a href="#" data-toggle="tooltip" data-placement="right" title="Inbox"><i class="fas fa-inbox"></i></a>
                            </li>
                            <li>
                                <a href="#" data-toggle="tooltip" data-placement="right" title="Chat"><i class="far fa-comments"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                
            </div><!-- /Page Sidebar -->
                
            
            <!-- Page Content -->
            <div class="page-content">
                <div class="secondary-sidebar">
                    <div class="secondary-sidebar-bar">
                        <a href="#" class="logo-box" style="text-transform: uppercase;text-align: center;" >{{ Auth::user()->name }}</a>
                    </div>
                    <div class="secondary-sidebar-menu">
                        <ul class="accordion-menu">
                            <li class="active-page">
                                <a href="{{url('/home')}}">
                                    <i class="menu-icon icon-home4"></i><span>Dashboard</span>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">
                                    <i class="menu-icon icon-apps"></i><span>Category</span><i class="accordion-icon fas fa-angle-left"></i>
                                </a>
                                <ul class="sub-menu">
                                    <li><a href="{{url('/admin_add_category_view')}}">Add Category</a></li>
                                    <li><a href="{{url('/admin_view_category_view')}}">View Category</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:void(0)">
                                    <i class="menu-icon icon-layers"></i><span>Sub Category</span><i class="accordion-icon fas fa-angle-left"></i>
                                </a>
                                <ul class="sub-menu">
                                    <li><a href="{{url('/sub_category_view')}}">Add Subcategories</a></li>
                                    <li><a href="layout-collapsed-sidebar.html">View Subcategories</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:void(0)">
                                    <i class="menu-icon icon-brush"></i><span>Banners</span><i class="accordion-icon fas fa-angle-left"></i>
                                </a>
                                <ul class="sub-menu">
                                    <li><a href="{{url('/admin_add_banner_view')}}">Add Banners</a></li>
                                    <li><a href="{{url('/admin_view_banner')}}">View Banners</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:void(0)">
                                    <i class="menu-icon icon-flash_on"></i><span>Products</span><i class="accordion-icon fas fa-angle-left"></i>
                                </a>
                                <ul class="sub-menu">
                                    <li><a href="{{url('/admin_add_products_view')}}">Add Products</a></li>
                                    <li><a href="{{url('/admin_view_product_view')}}">View Products</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="{{url('/recomended_update')}}">
                                    <i class="menu-icon icon-code"></i><span>Product Status</span>
                                </a>
                            </li>

                <!-- <li class="menu-divider"></li>-->                            
                        </ul>
                    </div>
                </div>
                <!-- Page Header -->
                <div class="page-header">
                    <div class="search-form">
                        <form action="#" method="GET">
                            <div class="input-group">
                                <input type="text" name="search" class="form-control search-input" placeholder="Type something...">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" id="close-search" type="button"><i class="icon-close"></i></button>
                                </span>
                            </div>
                        </form>
                    </div>
                    <nav class="navbar navbar-default navbar-expand-md">
                        <div class="container-fluid">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header">
                                <div class="logo-sm">
                                    <a href="javascript:void(0)" id="sidebar-toggle-button"><i class="fas fa-bars"></i></a>
                                   
                                </div>
                                <button type="button" class="navbar-toggler collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                    <i class="fas fa-angle-down"></i>
                                </button>
                            </div>
                        
                            <!-- Collect the nav links, forms, and other content for toggling -->
                        
                            <div class="collapse navbar-collapse justify-content-between" id="bs-example-navbar-collapse-1">
                                <ul class="nav navbar-nav mr-auto">
                                    <li class="collapsed-sidebar-toggle-inv"><a href="javascript:void(0)" id="collapsed-sidebar-toggle-button"><i class="fas fa-bars"></i></a></li>
                                    <li><a href="javascript:void(0)" id="toggle-fullscreen"><i class="fas fa-expand"></i></a></li>
                                    <li><a href="javascript:void(0)" id="search-button"><i class="fas fa-search"></i></a></li>
                                </ul>
                            </div><!-- /.navbar-collapse -->
                                <ul class="nav navbar-nav">                               
                                    <li class="dropdown nav-item d-md-block">
                                        <a href="#" class="nav-link dropdown-toggle" id="navbarDropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img src="../../assets/images/avatars/avatar1.png" alt="" class="rounded-circle"></a>
                                        <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                            <li><a href="#">Profile</a></li>
                                         <!--    <li><a href="#">Calendar</a></li>
                                            
                                            <li role="separator" class="divider"></li>
                                            <li><a href="#">Account Settings</a></li> -->
                                            <li><a href="{{ url('/logout') }}">Log Out</a></li>
                                        </ul>
                                    </li>
                                </ul>
                        </div><!-- /.container-fluid -->
                    </nav>
                </div><!-- /Page Header -->
                <!-- Page Inner -->
                <div class="page-inner no-page-title">
                    <div id="main-wrapper">
                        <div class="content-header">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb breadcrumb-style-1">
                                    <li class="breadcrumb-item">Home</li>
                                    <li class="breadcrumb-item " aria-current="page">@yield('title')</li>
                                </ol>
                            </nav>
                        </div>
                      
                
                      
                        <div class="row">
                            <div class="col-12">
                               @yield('content')
                            </div>
                        </div>
                    </div><!-- Main Wrapper -->

                    
                <div class="page-footer">
                    <p>2019 &copy; stacks</p>
                </div>
                </div><!-- /Page Inner -->
                <div class="page-right-sidebar" id="main-right-sidebar">
                    <div class="page-right-sidebar-inner">
                        <div class="right-sidebar-top">
                            <span class="chat-header">Chat</span>
                            <a href="javascript:void(0)" class="right-sidebar-toggle right-sidebar-close" data-sidebar-id="main-right-sidebar"><i class="icon-close"></i></a>
                        </div>
                        <div class="right-sidebar-content">
                            <!-- Tab panes -->
                                    <div class="chat-list">
                                        <span class="chat-title">Recent</span>
                                        <a href="javascript:void(0);" class="right-sidebar-toggle chat-item unread" data-sidebar-id="chat-right-sidebar">
                                            <div class="user-avatar">
                                                <img src="../../assets/images/avatars/avatar1.png" alt="">
                                            </div>
                                            <div class="chat-info">
                                                <span class="chat-author">David</span>
                                                <span class="chat-text">Hello there!</span>
                                                <span class="chat-time">16:20</span>
                                            </div>
                                        </a>
                                        <a href="javascript:void(0);" class="right-sidebar-toggle chat-item unread active-user" data-sidebar-id="chat-right-sidebar">
                                            <div class="user-avatar">
                                                <img src="../../assets/images/avatars/avatar2.png" alt="">
                                            </div>
                                            <div class="chat-info">
                                                <span class="chat-author">Bob</span>
                                                <span class="chat-text">Hello there!</span>
                                                <span class="chat-time">11:34</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="chat-list">
                                        <span class="chat-title">Older</span>
                                        <a href="javascript:void(0);" class="right-sidebar-toggle chat-item" data-sidebar-id="chat-right-sidebar">
                                            <div class="user-avatar">
                                                <img src="../../assets/images/avatars/avatar3.png" alt="">
                                            </div>
                                            <div class="chat-info">
                                                <span class="chat-author">Tom</span>
                                                <span class="chat-text">Hello there!</span>
                                                <span class="chat-time">2d</span>
                                            </div>
                                        </a>
                                        <a href="javascript:void(0);" class="right-sidebar-toggle chat-item active-user" data-sidebar-id="chat-right-sidebar">
                                            <div class="user-avatar">
                                                <img src="../../assets/images/avatars/avatar4.png" alt="">
                                            </div>
                                            <div class="chat-info">
                                                <span class="chat-author">Anna</span>
                                                <span class="chat-text">Hello there!</span>
                                                <span class="chat-time">4d</span>
                                            </div>
                                        </a>
                                        <a href="javascript:void(0);" class="right-sidebar-toggle chat-item active-user" data-sidebar-id="chat-right-sidebar">
                                            <div class="user-avatar">
                                                <img src="../../assets/images/avatars/avatar5.png" alt="">
                                            </div>
                                            <div class="chat-info">
                                                <span class="chat-author">Noah</span>
                                                <span class="chat-text">Hello there!</span>
                                                <span class="chat-time">&nbsp;</span>
                                            </div>
                                        </a>
                                        <a href="javascript:void(0);" class="load-more-messages"  data-toggle="tooltip" data-placement="bottom" title="Load More">&bull;&bull;&bull;</a>
                                    </div>
                        </div>
                    </div>
                </div>
                <div class="page-right-sidebar" id="chat-right-sidebar">
                    <div class="page-right-sidebar-inner">
                        <div class="right-sidebar-top">
                            <div class="chat-top-info">
                                <span class="chat-name">Noah</span>
                                <span class="chat-state">2h ago</span>
                            </div>
                            <a href="javascript:void(0)" class="right-sidebar-toggle chat-sidebar-close float-right" data-sidebar-id="chat-right-sidebar"><i class="icon-keyboard_arrow_right"></i></a>
                        </div>
                        <div class="right-sidebar-content">
                            <div class="right-sidebar-chat slimscroll">
                                <div class="chat-bubbles">
                                <div class="chat-start-date">02/06/2017 5:58PM</div>
                                    <div class="chat-bubble them">
                                        <div class="chat-bubble-img-container">
                                            <img src="../../assets/images/avatars/avatar1.png" alt="">
                                        </div>
                                        <div class="chat-bubble-text-container">
                                            <span class="chat-bubble-text">Hello</span>
                                        </div>
                                    </div>
                                    <div class="chat-bubble me">
                                        <div class="chat-bubble-text-container">
                                            <span class="chat-bubble-text">Hello!</span>
                                        </div>
                                    </div>
                                <div class="chat-start-date">03/06/2017 4:22AM</div>
                                    <div class="chat-bubble me">
                                        <div class="chat-bubble-text-container">
                                            <span class="chat-bubble-text">lorem</span>
                                        </div>
                                    </div>
                                    <div class="chat-bubble them">
                                        <div class="chat-bubble-img-container">
                                            <img src="../../assets/images/avatars/avatar1.png" alt="">
                                        </div>
                                        <div class="chat-bubble-text-container">
                                            <span class="chat-bubble-text">ipsum dolor sit amet</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="chat-write">
                                <form class="form-horizontal" action="javascript:void(0);">
                                    <input type="text" class="form-control" placeholder="Say something">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- /Page Content -->
        </div><!-- /Page Container -->
        
        
        <!-- Javascripts -->
        <script src="../../assets/plugins/jquery/jquery-3.1.0.min.js"></script>
        <script src="../../assets/plugins/bootstrap/popper.min.js"></script>
        <script src="../../assets/plugins/bootstrap/js/bootstrap.min.js"></script>
        <script src="../../assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
        <script src="../../assets/plugins/switchery/switchery.min.js"></script>
        <script src="../../assets/plugins/apexcharts/dist/apexcharts.min.js"></script>
        <script src="../../assets/js/concept.min.js"></script>
        <script src="../../assets/js/pages/dashboard.js"></script>
    </body>
</html>